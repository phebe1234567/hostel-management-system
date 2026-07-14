<?php

namespace App\Filament\Student\Pages;

use Filament\Auth\Pages\Register as PagesRegister;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Schemas\Schema;

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
                $this->getEmailFormComponent(),
                TextInput::make('phone_number')->label('Phone Number')->required(),
                TextInput::make('course_of_study')->label('Course')->required(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),

            ]);
    }
}
