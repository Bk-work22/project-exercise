<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
class WelcomeMail extends Mailable
{
   use Queueable, SerializesModels;
   public $data;
/**
    * Create a new message instance.
    
    * @return void
    */
   public function __construct($data)
   {
       $this->data = $data;
   }
/**
    * Build the message.
    
    * @
    */
   public function build()
{
       $subject = 'Welcome';
       return $this->view('emails.welcome')->subject($subject);
   
}
}