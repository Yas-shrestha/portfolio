<?php

namespace App\Jobs;

use App\Mail\ContactMessageMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class SendContactFormMailJob implements ShouldQueue
{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;
    public int $backoff = 60;

    /**
     * Create a new job instance.
     */
    public function __construct(public Contact $contact) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('yeskumarshrestha1@gmail.com')
            ->send(new ContactMessageMail($this->contact));
    }
}
