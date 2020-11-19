<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'larabbs3');

// Project repository
set('repository', 'git@github.com:ayaup/larabbs6.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);

// Shared files/dirs between deploys
add('shared_files', ['']);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', ['storage']);


// Hosts

host('139.196.43.22')
    ->user('deployer')
    ->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/www/wwwroot/{{application}}');

// task('test', function () {
//         writeln('Hello world');
//     });

// Tasks

// task('git:pushall',function(){
// run('git add -A');
// run('git commit -m "auto commit by deploy to gitee"');
//     run('git push origin master');

// });

// task('build', function () {
    // run('cd {{release_path}} && build');
// });

// [Optional] if deploy fails automatically unlock.
// after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

// before('deploy:symlink', 'artisan:migrate');

