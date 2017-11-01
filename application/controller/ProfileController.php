<?php

class ProfileController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        Auth::checkAuthentication();
    }

    /**
     * This method controls what happens when you move to /overview/index in your app.
     * Shows a list of all users.
     */
    public function index()
    {
        if (Session::get("user_account_type") == 7) {
          $this->View->render('profile/index', array(
              'users' => UserModel::getPublicProfilesOfAllUsers())
          );
        }else {
          $this->View->render('error/404');
        }

    }

    /**
     * This method controls what happens when you move to /overview/showProfile in your app.
     * Shows the (public) details of the selected user.
     * @param $user_id int id the the user
     */
    public function showProfile($user_id= null)
    {
        if (isset($user_id) && $user_id == $_SESSION['user_id'] OR Session::get("user_account_type") == 7){
            $this->View->render('profile/showProfile', array(
                'user' => UserModel::getPublicProfileOfUser($user_id))
            );
        } else {
            Redirect::to('profile/showProfile/'.session::get('user_id'));
        }
    }

    public function getUsers()
    {
      $users = UserModel::getPublicProfilesOfAllUsers();

      $response = new Response(json_encode($users));
      $response->headers->set('Content-Type', 'application/json');

      return $response;

    }
}
