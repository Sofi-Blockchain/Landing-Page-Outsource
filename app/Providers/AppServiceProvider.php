<?php

namespace App\Providers;

use App\Models\Setting;
use App\Repositories\Blog\BlogInterface;
use App\Repositories\Blog\BlogRepository;
use App\Models\Candidates;
use App\Repositories\Candidate\CandidateInterface;
use App\Repositories\Candidate\CandidateRepository;
use App\Repositories\Careers\CareersInterface;
use App\Repositories\Careers\CareersRepository;
use App\Repositories\CaseStudy\CaseStudyInterface;
use App\Repositories\CaseStudy\CaseStudyRepository;
use App\Repositories\Director\DirectorInterface;
use App\Repositories\Director\DirectorRepository;
use App\Repositories\EcoSystem\EcoSystemInterface;
use App\Repositories\EcoSystem\EcoSystemRepository;
use App\Repositories\FAQ\FAQInterface;
use App\Repositories\FAQ\FAQRepository;
use App\Repositories\Partner\PartnerInterface;
use App\Repositories\Partner\PartnerRepository;
use App\Repositories\Mail\MailInterface;
use App\Repositories\Mail\MailRepository;
use App\Repositories\Music\MusicInterface;
use App\Repositories\Music\MusicRepository;
use App\Repositories\Stream\StreamInterface;
use App\Repositories\Stream\StreamRepository;
use App\Repositories\MilesStone\MilesStoneInterface;
use App\Repositories\MilesStone\MilesStoneRepository;
use App\Repositories\User\UserInterface;
use App\Repositories\User\UserRepository;
use App\View\Components\Footer;
use App\View\Components\Header;
use App\View\Components\OffCanvas;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    $this->app->bind(UserInterface::class, UserRepository::class);
    $this->app->bind(DirectorInterface::class, DirectorRepository::class);
    $this->app->bind(PartnerInterface::class, PartnerRepository::class);
    $this->app->bind(EcoSystemInterface::class, EcoSystemRepository::class);
    $this->app->bind(MailInterface::class, MailRepository::class);
    $this->app->bind(MusicInterface::class, MusicRepository::class);
    $this->app->bind(StreamInterface::class, StreamRepository::class);
    $this->app->bind(BlogInterface::class, BlogRepository::class);
    $this->app->bind(CareersInterface::class, CareersRepository::class);
    $this->app->bind(CandidateInterface::class, CandidateRepository::class);
    $this->app->bind(MilesStoneInterface::class, MilesStoneRepository::class);
    $this->app->bind(CaseStudyInterface::class, CaseStudyRepository::class);
    $this->app->bind(FAQInterface::class, FAQRepository::class);
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    // Components
    Blade::component('header', Header::class);
    Blade::component('off-canvas', OffCanvas::class);
    Blade::component('footer', Footer::class);

    // CMS Sidebar
    View::composer('*', function () {
      // Icon class is using Font Awesome 4 icon class
      $routes = [
        [
          'nav' => [
            [
              'iconClass' => 'fas fa-tachometer-alt',
              'label' => 'Bảng điều khiển',
              'routeName' => 'cms.index'
            ],
            [
              'iconClass' => 'fa fa-cogs',
              'label' => 'Hệ thống',
              'routeGroup' => 'cms.system.',
              'children' => [
                [
                  'label' => 'Thông tin doanh nghiệp',
                  'routeName' => 'cms.system.index'
                ],
              ]
            ],
            [
              'iconClass' => 'fa fa-folder-open',
              'label' => 'Thư viện',
              'routeName' => 'cms.fileManager'
            ],
          ],
        ],

        [
          'title' => 'Nội dung',
          'nav' => [
            [
              'iconClass' => 'fa fa-user',
              'label' => 'Quản trị viên',
              'routeGroup' => 'cms.user.',
              'children' => [
                [
                  'label' => 'Danh sách',
                  'routeName' => 'cms.user.index'
                ],
                [
                  'label' => 'Thêm mới',
                  'routeName' => 'cms.user.form'
                ],
              ]
            ],
            [
              'iconClass' => 'fa fa-leaf',
              'label' => 'Director',
              'routeGroup' => 'cms.director.',
              'children' => [
                [
                  'label' => 'Danh sách',
                  'routeName' => 'cms.director.index'
                ],
                [
                  'label' => 'Thêm mới',
                  'routeName' => 'cms.director.form'
                ],
              ]
            ],
            [
              'iconClass' => 'fa fa-graduation-cap',
              'label' => 'Partner',
              'routeGroup' => 'cms.partner.',
              'children' => [
                [
                  'label' => 'Danh sách',
                  'routeName' => 'cms.partner.index'
                ],
                [
                  'label' => 'Thêm mới',
                  'routeName' => 'cms.partner.form'
                ],
              ]
            ],
            [
              'iconClass' => 'fa fa-cog',
              'label' => 'Ecosystem',
              'routeGroup' => 'cms.ecosystem.',
              'children' => [
                [
                  'label' => 'Danh sách',
                  'routeName' => 'cms.ecosystem.index'
                ],
                [
                  'label' => 'Thêm mới',
                  'routeName' => 'cms.ecosystem.form'
                ],
              ]
            ],
            [
              'iconClass' => 'fa fa-music',
              'label' => 'Music',
              'routeGroup' => 'cms.music.',
              'children' => [
                [
                  'label' => 'Danh sách',
                  'routeName' => 'cms.music.index'
                ],
                [
                  'label' => 'Thêm mới',
                  'routeName' => 'cms.music.form'
                ],
              ]
            ],
            [
              'iconClass' => 'fa fa-tv',
              'label' => 'Stream',
              'routeGroup' => 'cms.stream.',
              'children' => [
                [
                  'label' => 'Danh sách',
                  'routeName' => 'cms.stream.index'
                ],
                [
                  'label' => 'Thêm mới',
                  'routeName' => 'cms.stream.form'
                ],
              ]
            ],
            [
              'iconClass' => 'fa fa-book',
              'label' => 'Blog',
              'routeGroup' => 'cms.blog.',
              'children' => [
                [
                  'label' => 'Danh sách',
                  'routeName' => 'cms.blog.index'
                ],
                [
                  'label' => 'Thêm mới',
                  'routeName' => 'cms.blog.form'
                ],
              ]
            ],
            [
              'iconClass' => 'fa fa-briefcase',
              'label' => 'Careers',
              'routeGroup' => 'cms.careers.',
              'children' => [
                [
                  'label' => 'Danh sách',
                  'routeName' => 'cms.careers.index'
                ],
                [
                  'label' => 'Thêm mới',
                  'routeName' => 'cms.careers.form'
                ],
              ]
            ],
            [
              'iconClass' => 'fa fa-universal-access',
              'label' => 'Candidate',
              'routeGroup' => 'cms.candidate.',
              'children' => [
                [
                  'label' => 'Danh sách',
                  'routeName' => 'cms.candidate.index'
                ],
              ]
            ],
            [
              'iconClass' => 'fa fa-history',
              'label' => 'MilesStone',
              'routeGroup' => 'cms.milesstones.',
              'children' => [
                [
                  'label' => 'Danh sách',
                  'routeName' => 'cms.milesstones.index'
                ],
                [
                  'label' => 'Thêm mới',
                  'routeName' => 'cms.milesstones.form'
                ],
              ]
            ],
            [
              'iconClass' => 'fa fa-star',
              'label' => 'CaseStudy',
              'routeGroup' => 'cms.casestudy.',
              'children' => [
                [
                  'label' => 'Danh sách',
                  'routeName' => 'cms.casestudy.index'
                ],
                [
                  'label' => 'Thêm mới',
                  'routeName' => 'cms.casestudy.form'
                ],
              ]
            ],
            [
              'iconClass' => 'fa fa-book',
              'label' => 'FAQ',
              'routeGroup' => 'cms.faq.',
              'children' => [
                [
                  'label' => 'Danh sách',
                  'routeName' => 'cms.faq.index'
                ],
                [
                  'label' => 'Thêm mới',
                  'routeName' => 'cms.faq.form'
                ],
              ]
            ],
          ],
        ]
      ];

      View::share('routes', $routes);
      $settings = Setting::allInArrayFormat();
      View::share('s', $settings);
    });
  }
}
