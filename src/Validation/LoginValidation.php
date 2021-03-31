<?php

namespace App\Validation;

use App\Exception\Exception;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class LoginValidation extends ValidationManager
{
    /**
     * @return void
     */
    public function handle(): void
    {
        $request = $this->request->request->all();

        $this->emailValidation($request);

        $this->passwordValidation($request);
    }

    /**
     * @param array $request
     * @return bool
     */
    private function emailValidation(array $request): bool
    {
        $validation = $this->validation()->validate($request['email'] ?? null,new Email());

        if (0 !== count($validation)) {
            // there are errors, now you can show them
            return Exception::customException('email value is not valid as email format');
        }

        return true;
    }

    /**
     * @param array $request
     * @return bool
     */
    private function passwordValidation(array $request): bool
    {
        $validation = $this->validation()->validate($request['password'] ?? '',new NotBlank());

        if (0 !== count($validation)) {

            foreach ($validation as $valid){
                // there are errors, now you can show them
                return Exception::customException('password value should not be blank');
            }

        }

        return true;
    }
}