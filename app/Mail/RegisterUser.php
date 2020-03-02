<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class RegisterUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    
    public function __construct()
    {
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com')
                    ->subject('[NBDS] Xác nhận tài khoản')
                    ->markdown('emails.register.user')
                    ->with([
                        'user' => 'dungchu',
                        'name' => 'dungchu97',
                        'actionButton' => 'Xác nhận',
                        'actionText1' => 'Bạn đã đăng kí thành viên tại hệ thống NBDS, xin vui lòng nhấn vào nút',
                        'actionText2' => 'bên dưới để kích hoạt tài khoản'
                    ]); 
    }
}
