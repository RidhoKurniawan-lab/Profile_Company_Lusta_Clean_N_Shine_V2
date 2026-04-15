<?php

require_once MODEL_PATH . '/UserModel.php';
require_once CORE_PATH . '/Auth.php';

class AuthApiController extends Controller
{

    private UserModel $user;

    public function __construct()
    {
        $this->user = new UserModel;
    }

    public function login()
    {
        // get request http
        $request = json_decode(file_get_contents('php://input'), true);

        // cek field input 
        if (empty($request['email']) || empty($request['password'])) {
            $this->json([
                'success' => false,
                'message' => 'Email and Passwors is required'
            ], 422);
        }

        // cek user in db and return data
        $user = $this->user->findByEmail($request['email']);

        // if user not found
        if (!$user) {
            $this->json([
                'success' => false,
                'field' => 'email',
                'message' => 'Email Not found'
            ]);
        }

        // if password not match in password in db
        if (!password_verify($request['password'], $user['password'])) {
            $this->json([
                'success' => false,
                'field' => 'password',
                'message' => 'Password Wrong'
            ]);
        }

        // remove password in data $user
        unset($user['password']);

        // create session
        $_SESSION['auth'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email']
        ];

        // return data if success login
        $this->json([
            'success' => true,
            'message' => 'Login Success',
            'data' => $user
        ]);
    }

    public function logout()
    {

        if (!Auth::check()) {
            $this->json([
                'success' => false,
                'message' => 'Unauthorized'
            ]);
        }

        session_unset();
        session_destroy();

        $this->json([
            'success' => true,
            'message' => 'Logout Success'
        ]);
    }
}
