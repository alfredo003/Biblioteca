<?php
require_once './../config/ligar_bd.php';
require_once './../model/User.php';


$getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$data = array_map("strip_tags", $getPost);

$action = $data['action'];
$response = array();
unset($data['action']);
usleep(400000);

switch ($action) {
    case 'create_user':
        //$response = $data;

        if (in_array("", $data)) {
            $response["error"] = "É precisso informar todos os dados.";
        } elseif ($data['password'] !== $data['confirPassword']) {
            $response["error"] = "Verifique a Palavra-passe.";
        } else {
            $user = new User();
            $username = $data['username'];
            $email = $data['email'];
            $type= $data['type'];
            $course= $data['course'];
            $password= $data['password'];
            $codAccess= $data['codAccess'];
                     
       $user->setUsername($username);
       $user->setEmail($email);
       $user->setType($type);
       $user->setCourse($course);
       $user->setPassword($password);
       $user->setCodAccess($codAccess);
       $result=$user->createUser(Ligar::chamar_bd());
       $response['success'] = "success";
        }
        break;
}

if (!empty($response)) {
    echo json_encode($response);
} else {
    $response["error"] = true;
    $response["errorMsg"] = "501 - Erro ao processar requisição.";
    echo json_encode($response);
}

    