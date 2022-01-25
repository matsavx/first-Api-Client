<?php


namespace App\sources;


class ApiClient
{
    private string $URL;

    /**
     * ApiClient constructor.
     * @param string $URL
     */
    public function __construct(string $URL)
    {
        $this->URL = $URL . '/api';
    }

    /**
     * @return string
     */
    public function getURL(): string
    {
        return $this->URL;
    }

    /**
     * @param string $URL
     */
    public function setURL(string $URL): void
    {
        $this->URL = $URL;
    }

    /**
     * @param $login
     * @param $password
     * @return bool|string
     */
    public function addUser($login, $password): bool|string
    {
        $curl_init = curl_init($this->URL . '/user/userRegister');
        curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_init, CURLOPT_POST, true);
        curl_setopt($curl_init, CURLOPT_POSTFIELDS, [
            "login"=>$login,
            "password"=>$password
        ]);
        $response = curl_exec($curl_init);
        curl_close($curl_init);
        return $response;
    }

    /**
     * @param $note_name
     * @param $note_description
     * @param $id
     * @return bool|string
     */
    public function addNote($note_name, $note_description, $id): bool|string {
        $curl_init = curl_init($this->URL . '/user/note/' . $id);
        curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_init, CURLOPT_POST, true);
        curl_setopt($curl_init, CURLOPT_POSTFIELDS, [
            "note_name"=>$note_name,
            "note_description"=>$note_description
        ]);
        $response = curl_exec($curl_init);
        curl_close($curl_init);
        return $response;
    }

    /**
     * @param $id
     * @return bool|string
     */
    public function deleteNote($id): bool|string
    {
        $curl_init = curl_init($this->URL . '/user/note/' . $id);
        curl_setopt($curl_init, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl_init);
        curl_close($curl_init);
        return $response;
    }

    /**
     * @param $id
     * @return bool|string
     */
    public function getNote($id): bool|string
    {
        $curl_init = curl_init($this->URL . '/note/getAllNoteByUser/' . $id);
        curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl_init);
        curl_close($curl_init);
        return $response;
    }

    /**
     * @param $id
     * @param $note_name
     * @param $note_description
     * @return bool|string
     */
    public function updatePost($id, $note_name, $note_description): bool|string
    {
        $curl_init = curl_init($this->URL . '/user/post/' . $id);
        curl_setopt($curl_init, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen(json_encode([
                "note_name"=>$note_name,
                "note_description"=>$note_description
            ]))));
        curl_setopt($curl_init, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($curl_init, CURLOPT_POSTFIELDS,json_encode([
            "note_name"=>$note_name,
            "note_description"=>$note_description
        ]));
        curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl_init);
        curl_close($curl_init);
        return $response;
    }

    public function getToken($login, $password):void
    {
        $curl_init = curl_init($this->URL . 'api/authorization');
        curl_setopt($curl_init, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , [
            "login" => $login,
            "password" => $password
        ] ));
        $result = curl_exec($curl_init);
        curl_close($curl_init);
        echo $result;
    }

    public function upload(User $user)
    {
        $this->getToken($user->getLogin(), $user->getPassword());
    }
}