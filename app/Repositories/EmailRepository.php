<?php

namespace App\Repositories;

//use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Email;

/**
 * Class EmailRepository.
 */
class EmailRepository implements EmailRepositoryInterface
{
    protected $email;

    public  function __construct( Email $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        //return YourModel::class;
    }

    public function  save($mail)
    {
        $this->email->email = $mail;
        $this->email->save();
    }
}
