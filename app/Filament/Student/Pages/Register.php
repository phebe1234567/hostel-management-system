<?php

namespace App\Filament\Student\Pages;

use App\Models\Student;
use Filament\Auth\Pages\Register as PagesRegister;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;


class Register extends PagesRegister
{
    // protected string $view = 'filament.student.pages.register';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

     public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                // $this->getNameFormComponent(),
                 TextInput::make('first_name')->label('First Name')->required(),
                TextInput::make('last_name')->label('Last Name')->required(),
                TextInput::make('matric_no')->label('Matric Number')->required(),
                $this->getEmailFormComponent(),
                TextInput::make('phone')->label('Phone')->required(),
                TextInput::make('course_of_study')->label('Course')->required(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),

            ]);
    }

    protected function handleRegistration(array $data): Model
    {
        $student = Student::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'matric_no' => $data['matric_no'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'course_of_study' => $data['course_of_study'],
            'password' => hash:make($data['password']),
        ]);
       Notification::make()
            ->title('Registration Successful')
            ->success()
            ->send();
        return $student;
    }

}
