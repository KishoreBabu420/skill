<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $contact_data = array(
        "fname" => $fname,
        "email" => $email,
        "phone" => $phone,
    );

    $ans_hubspot = new ans_hubspot();
    $ans_hubspot->contact_create($contact_data);
    $ans_hubspot->list_assign_contact("2", $contact_data["phone"]);

}

class ans_hubspot {
    private $hapikey = "e9ce8b63-120a-4ecc-af57-640f0c474f1e";

    function list_assign_contact($lid, $phone) {
        (object)$arr = array(
            "phone" => array(
                $phone
            )
        );
        $post_json = json_encode($arr);
        $endpoint = 'https://api.hubapi.com/contacts/v1/lists/' . $lid . '/add?hapikey=' . $this->hapikey;
        $this->http($endpoint, $post_json);
    }

    function list_create($list_name)  {
        $arr = array(
            "name" => $list_name,
            "dynamic" => false,
            "filters" => array(
                array(
                    (object)array(
                        "operator" => "EQ",
                        "value" => "@hubspot",
                        "property" => "website",
                        "type" => "string"
                    )
                )
            )
        );
        $post_json = json_encode($arr);
        $endpoint = 'https://api.hubapi.com/contacts/v1/lists?hapikey=' . $this->hapikey;
        $this->http($endpoint, $post_json);
    }

    function contact_create($contact_data) {
        $arr = array(
            'properties' => array(
                array(
                    'property' => 'phone',
                    'value' => $contact_data["phone"]
                ) ,
                array(
                    'property' => 'email',
                    'value' => $contact_data["email"]
                ) ,
                array(
                    'property' => 'firstname',
                    'value' => $contact_data["fname"]
                )

            )
        );

        $post_json = json_encode($arr);
        $endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=' . $this->hapikey;
        $this->http($endpoint, $post_json);
    }

    function http($endpoint, $post_json) {

        $ch = @curl_init();
        @curl_setopt($ch, CURLOPT_POST, true);
        @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
        @curl_setopt($ch, CURLOPT_URL, $endpoint);
        @curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json'
        ));
        @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = @curl_exec($ch);
        $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_errors = curl_error($ch);
        @curl_close($ch);
        return $response . "
";

    }
}
 ?>