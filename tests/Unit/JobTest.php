<?php

use App\Models\Employer;
use App\Models\Job;



// test('example', function () {
//     $employer = \App\Models\Employer::factory()->create();
//     $job = \App\Models\Job::factory()->create([
//         'emplyer_id' => $employer->id,
//     ]);

//     expect($job->employer->is($employer))->toBeTrue();
// });




it('belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();
});



it('can have tags', function () {
    $job = Job::factory()->create();
    $job->tag('Frontend');
    expect($job->tags)->toHaveCount(1);
});
