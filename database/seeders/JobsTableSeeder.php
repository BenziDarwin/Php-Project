<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Entry Level Software Developer',
                'description' => 'Job Summary:
Our company is seeking an Entry Level Software Developer to join our team. The successful candidate will be responsible for designing, developing, testing, and maintaining software solutions. This role will require collaboration with other team members and departments to ensure timely delivery of high-quality software solutions.

Responsibilities:

Collaborate with the development team to design, develop, and maintain software solutions.
Write clean, efficient, and well-documented code in various programming languages.
Perform testing and debugging to ensure the quality of software.
Work with other teams and departments to identify and resolve issues that arise in software development.
Keep up to date with emerging technologies and programming languages to stay relevant in the industry.
Participate in team meetings and provide regular updates on project progress.

Requirements:

Bachelor\'s degree in Computer Science or related field.
Experience with one or more programming languages such as Java, Python, C#, or C++.
Familiarity with software development methodologies such as Agile or Scrum.
Strong problem-solving and analytical skills.
Ability to work independently and as part of a team.
Excellent communication skills, both written and verbal.

Preferred qualifications:

Experience with web development technologies such as HTML, CSS, and JavaScript.
Familiarity with version control systems such as Git.
Experience with database technologies such as SQL or NoSQL.

This is a full-time position with competitive compensation and benefits. If you have a passion for software development and are eager to learn and grow in your career, we encourage you to apply.',
                'salaryrange' => '1.2m - 1.7m',
                'sector' => 'Information Technology & Software Developement',
                'companyname' => 'KalTech',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Senior Tester',
                'description' => 'Job Summary:
Our company is seeking a Senior Tester to join our team. The successful candidate will be responsible for leading the testing efforts for software solutions and ensuring the quality and reliability of our products. This role will require collaboration with other team members and departments to ensure timely delivery of high-quality software solutions.

Responsibilities:

Lead the testing efforts for software solutions, including developing and executing test plans, identifying and reporting defects, and ensuring test coverage.
Work with development teams and other departments to identify and resolve issues that arise in software development.
Manage test environments and data to ensure that testing is conducted in a controlled and accurate manner.
Collaborate with product owners, project managers, and other stakeholders to ensure that testing aligns with business objectives and requirements.
Mentor and train junior testers, providing guidance and support to help them grow in their roles.
Keep up to date with emerging technologies and testing methodologies to stay relevant in the industry.
Participate in team meetings and provide regular updates on project progress.

Requirements:

Bachelor\'s degree in Computer Science, Engineering or related field.
Minimum of 5 years of experience in software testing, with a focus on web applications and mobile apps.
Strong knowledge of software testing methodologies and best practices.
Experience with test automation tools and frameworks such as Selenium, Appium, or Cypress.
Familiarity with performance testing tools such as JMeter or LoadRunner.
Strong problem-solving and analytical skills.
Ability to work independently and as part of a team.
Excellent communication skills, both written and verbal.

Preferred qualifications:

Experience with Agile or Scrum development methodologies.
Familiarity with cloud-based testing platforms such as Sauce Labs or BrowserStack.
Knowledge of API testing tools such as Postman or SoapUI.

This is a full-time position with competitive compensation and benefits. If you have a passion for software testing and are eager to take on a leadership role in a dynamic team environment, we encourage you to apply.',
                'salaryrange' => '1.1m - 1.5m',
                'sector' => 'Information Technology & Software Developement',
                'companyname' => 'KalTech',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'legal assistant',
                'description' => 'Job Summary:
Our law company is seeking a Legal Assistant to join our team. The successful candidate will provide administrative support to our legal team, assist with legal research, prepare legal documents, and communicate with clients. This role requires strong organizational skills, attention to detail, and the ability to manage multiple tasks simultaneously.

Responsibilities:

Provide administrative support to our legal team, including scheduling appointments, managing calendars, and handling correspondence.
Conduct legal research to support ongoing cases and assist with case preparation.
Draft and prepare legal documents, including contracts, pleadings, and briefs.
Communicate with clients and other parties involved in legal matters to gather information and provide updates on case progress.
Maintain accurate and up-to-date records of case files and client information.
Assist with document management, including filing, scanning, and organizing case files.
Prepare and submit legal documents for filing with courts and government agencies.

Requirements:

Bachelor\'s degree in paralegal studies, legal studies, or a related field.
Minimum of 2 years of experience as a legal assistant or paralegal.
Strong organizational skills and attention to detail.
Ability to work independently and manage multiple tasks simultaneously.
Excellent communication and interpersonal skills.
Proficiency with Microsoft Office and legal research databases.
Knowledge of legal terminology and procedures.

Preferred qualifications:

Certification as a paralegal or legal assistant.
Experience with document management software such as iManage or Worldox.
Knowledge of state and federal court rules and procedures.
Familiarity with electronic filing systems.',
                'salaryrange' => '2m-2.4m',
                'sector' => 'Law',
                'companyname' => 'Upstream',
            ),
        ));
        
        
    }
}