<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\User::find(1);

        $admin ->posts()->create([
            'title' => 'Oral Presentation / Demonstration',
            'description' => 'The Oral Presentation / Demonstration of your dissertation will take place on week beginning 18 May 2020. These will take place online due to the current situation which limits us from travelling. The schedule will be posted on Moodle within the next few days.',
            'body' => "Each student's session will last for 15 minutes. During the first 10 minutes you will deliver your oral presentation and do your demonstration (if applicable). This will then be followed by 5 minutes of Q&As. Note, you must complete your presentation and demonstration (if applicable) on time, i.e. within 10 minutes, or you will be asked to stop so that the Q&A session may begin. Please review the Guidelines and Marking scheme attached here which have also been posted on Moodle in the 'Handouts and Forms' folder. The handout describes the structure for the PPT that you must develop, the number of slides and the focus of each slide, and it also shows the marking scheme. Even though this is a P/F component, to ensure consistency and fairness, it will be marked as shown in the handout.
                        The sessions will be attended by the students that are supervised by a particular supervisor, their supervisor and another lecturer. For example, in my case, my session will be attended by my 4 supervisees, myself (as their supervisor) and another lecturer.
                        You must also up load the PPT on Turnitin in. Deadline is Friday, 22 May 2020 by 23:59.",
            'image' => 'uploads/banner.jpg',
        ]);

        $admin ->posts()->create([
            'title' => 'Tips for Students: How to Write an Assignment for College',
            'description' => 'When you’re a student, you have to deal with a huge number of classes. On top of everything, your professors also request academic assignments. Without these projects, it’s impossible for you to get a good grade for a particular course.',
            'body' => 'The assignment introduction is a key element that makes your content attractive. It’s the part that defines the direction of the overall assignment, as well as the quality of your research. There are few ways to write an attractive introduction:
                        Provide background on the main issue. If, for example, you’re writing about the potential solutions of obesity, you may briefly introduce the reader into the seriousness of the issue.
                        The introduction must not be overly general. When writing a great assignment, you must focus on the main point from the very beginning.
                        You may also start with a quote or an anecdote. However, it has to be highly relevant to your topic.
                        If this is an essay or another type of assignment that requires a thesis statement, you should position it at the end of the introductory paragraph.
                        An effective conclusion is just as important as the introduction. It’s your final chance to convince the reader that you made a valid point. The conclusion should state the aim and context of your discussion, and briefly summarize its main points. If this is a lengthier project, such as a research paper or dissertation, you may end with suggestions on further research.',
            'image' => 'uploads/banner.jpg',
        ]);


    }
}
