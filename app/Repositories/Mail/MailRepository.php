<?php

namespace App\Repositories\Mail;

use App\Mail\personalContactEmail;
use App\Mail\brandContactEmail;
use App\Mail\careerEmail;
use App\Repositories\Careers\CareersInterface;
use Illuminate\Support\Facades\Mail;


class MailRepository implements MailInterface
{
  private $careersRepository;

    public function __construct(CareersInterface $careersRepository)
    {
        $this->careersRepository = $careersRepository;
    }

  public function handleContact($data, $type)
  {
    // session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      if($type === 'personal'){
        $email = $_POST['email'];
      }elseif($type === 'brand'){
        $email = $_POST['emailBrand'];
      }elseif($type === 'careerMail'){
        $email = $_POST['careerEmail'];
      }

      if (isset($_SESSION['lastSentEmail'])) {
        $currentTime = time();
        $lastSentEmail = $_SESSION['lastSentEmail'];

        $timeDifference = $currentTime - $lastSentEmail['timestamp'];
        $timeThreshold = 1 * 60;

        if ($timeDifference < $timeThreshold && $lastSentEmail['email'] === $email) {
          $remainingTime = $timeThreshold - $timeDifference;
          return [
            'success' => 0,
            'message' => 'Please resend in ' . $remainingTime . ' seconds',
          ];
        }
      }

      $currentTime = time();
      $emailData = [
        'email' => $email,
        'timestamp' => $currentTime,
      ];

      $_SESSION['lastSentEmail'] = $emailData;

      if($type === 'personal'){
        $emailClass = personalContactEmail::class;
      }elseif($type === 'brand'){
        $emailClass = brandContactEmail::class;
      }elseif($type === 'careerMail'){
        $emailClass = careerEmail::class;
      }
      
      Mail::to(env('MAIL_RECEIVE_APPLY'))->send(new $emailClass($data));

      if($type === 'careerMail'){
        $this->careersRepository->CreateCandidate($data);
      }

      return [
        'success' => 1,
        'message' => 'Thank you for contacting us, supporter will respond in a few minutes',
      ];
    }
  }

  public function personalContact($data)
  {
    return $this->handleContact($data, 'personal');
  }

  public function brandContact($data)
  {
    return $this->handleContact($data, 'brand');
  }

  public function careerMail($data)
  {
    return $this->handleContact($data, 'careerMail');
  }
}