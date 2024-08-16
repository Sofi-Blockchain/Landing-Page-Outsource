<?php

namespace Database\Seeders;

use App\Models\Careers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CareersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Careers::truncate();
        Schema::enableForeignKeyConstraints();
        Careers::create([
        'name' => 'Software Engineer',
        'name_en' => 'Software Engineer',
        'location' => '3',
        'department' => '3',
        'status' => '1',
        'description' => '<p><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">As a Software Engineer, you will play a leading role in designing, developing, and maintaining our platform for our product. You will work closely with our team to build backend applications, write Infrastructure as Code (IaC) and ensure the reliability and smooth operation of our software. In addition, you will participate and contribute to the entire implementation process for new applications and building enhancements to existing applications.</span></span></p>
        <p><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Responsibilities</span></span></p>
        <ul>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Design, develop, and maintain our platform, working on the API, data layer and other presentation layers.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Generate reports and ensure the smooth operation of our software.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Codify infrastructure to ensure the reliability, maintainability and security of software platform.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Tackle technology and data problems, improving our handling, processing, and presentation of data.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Enhance the experience of our customers through continuous improvements to our software.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Work independently on assigned projects, both locally and overseas.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Stay up-to-date with the latest web development trends and technologies.</span></span></li>
        </ul>
        <p><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Qualifications</span></span></p>
        <ul>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Degree in Computer Science/Computer Engineering or related.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Good understanding of computer architectures, data structures, and algorithms.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Proficient in one or more of the following languages: Go, Python, Java, C#.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Able to write clean, testable code and are familiar with different testing strategies.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Familiar with common SQL/NoSQL databases such as Postgres, MongoDB, etc.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Strong track record of delivering results and eagerness to learn.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Strong interpersonal and communication skills.</span></span></li>
        </ul>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>',
        'description_en' => '<p><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">As a Software Engineer, you will play a leading role in designing, developing, and maintaining our platform for our product. You will work closely with our team to build backend applications, write Infrastructure as Code (IaC) and ensure the reliability and smooth operation of our software. In addition, you will participate and contribute to the entire implementation process for new applications and building enhancements to existing applications.</span></span></p>
        <p><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Responsibilities</span></span></p>
        <ul>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Design, develop, and maintain our platform, working on the API, data layer and other presentation layers.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Generate reports and ensure the smooth operation of our software.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Codify infrastructure to ensure the reliability, maintainability and security of software platform.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Tackle technology and data problems, improving our handling, processing, and presentation of data.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Enhance the experience of our customers through continuous improvements to our software.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Work independently on assigned projects, both locally and overseas.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Stay up-to-date with the latest web development trends and technologies.</span></span></li>
        </ul>
        <p><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Qualifications</span></span></p>
        <ul>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Degree in Computer Science/Computer Engineering or related.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Good understanding of computer architectures, data structures, and algorithms.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Proficient in one or more of the following languages: Go, Python, Java, C#.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Able to write clean, testable code and are familiar with different testing strategies.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Familiar with common SQL/NoSQL databases such as Postgres, MongoDB, etc.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Strong track record of delivering results and eagerness to learn.</span></span></li>
        <li><span style="color: #1f1f1f; font-family: consolas, lucida console, courier new, monospace;"><span style="font-size: 12px; white-space-collapse: preserve;">Strong interpersonal and communication skills.</span></span></li>
        </ul>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>',
        ]);
        Careers::create([
        'name' => 'Systems Engineer',
        'name_en' => 'Systems Engineer',
        'location' => '1',
        'department' => '3',
        'status' => '1',
        'description' => '<p>Responsibilities</p>
        <ul>
        <li>Work with project stakeholders to define solution requirements and specifications.</li>
        <li>Install, configure, and test operating systems, application software and system management tools at the project site.</li>
        <li>Support Solution Architects to enable them to specify the system design, development, and deployment requirements.</li>
        <li>Monitor and test application performance, troubleshoot, propose solutions, and work with developers to implement bug fixes.</li>
        <li>Researching new hardware and software solutions as well as methods to improve system performance.</li>
        <li>Act as a change agent in continuous improvement initiatives and the development of formal methodologies.</li>
        <li>Support ongoing and future sales opportunities.</li>
        </ul>
        <p>Qualifications</p>
        <ul>
        <li>Engineering degree and/or technical background delivering computer-based solutions, a background in IT, computer systems engineering, or</li>
        <li>systems engineering and analysis.</li>
        <li>5+ years of experience in delivering systems development/integration projects, ideally involving business-critical real-time/online systems.</li>
        <li>Proven working experience in installing, configuring, and troubleshooting Windows, UNIX /Linux-based environments.</li>
        <li>Solid networking knowledge (OSI network layers, TCP/IP)</li>
        <li>An understanding of software production and project management methodologies.</li>
        <li>Strong analytical and problem-solving skills as well as the ability to learn new technologies and multitask with attention to detail.</li>
        </ul>',
        'description_en' => '<p>Responsibilities</p>
        <ul>
        <li>Work with project stakeholders to define solution requirements and specifications.</li>
        <li>Install, configure, and test operating systems, application software and system management tools at the project site.</li>
        <li>Support Solution Architects to enable them to specify the system design, development, and deployment requirements.</li>
        <li>Monitor and test application performance, troubleshoot, propose solutions, and work with developers to implement bug fixes.</li>
        <li>Researching new hardware and software solutions as well as methods to improve system performance.</li>
        <li>Act as a change agent in continuous improvement initiatives and the development of formal methodologies.</li>
        <li>Support ongoing and future sales opportunities.</li>
        </ul>
        <p>Qualifications</p>
        <ul>
        <li>Engineering degree and/or technical background delivering computer-based solutions, a background in IT, computer systems engineering, or</li>
        <li>systems engineering and analysis.</li>
        <li>5+ years of experience in delivering systems development/integration projects, ideally involving business-critical real-time/online systems.</li>
        <li>Proven working experience in installing, configuring, and troubleshooting Windows, UNIX /Linux-based environments.</li>
        <li>Solid networking knowledge (OSI network layers, TCP/IP)</li>
        <li>An understanding of software production and project management methodologies.</li>
        <li>Strong analytical and problem-solving skills as well as the ability to learn new technologies and multitask with attention to detail.</li>
        </ul>',
        ]);
        Careers::create([
            'name' => 'Art Director',
            'name_en' => 'Art Director',
            'location' => '1',
            'department' => '1',
            'status' => '1',
            'description' => '<p>As the Art Director, you will manage a team of creatives working on a creative project. You will be responsible for developing and maintaining a clear vision and delivering a captivating visual message that speaks to our audience and consumers. To be successful in the role, we expect you to be a leader who is open to the influence, inspiration, and expertise of the people around them, leveraging the widest array of talents, strengths, and weaknesses.</p>
            <p>Responsibilities</p>
            <ul>
            <li>Collaborate with project Creative Director</li>
            <li>Develop project style guide and lays out project decks</li>
            <li>Oversee project graphic design</li>
            <li>Concept and design a wide array of creative assets</li>
            <li>Collaborate with creative team to develop concepts and strategic design ideas that can be effectively executed on-time and on-budget</li>
            <li>Take direction from Creative Director and Creative Lead and execute per those overall viewpoint, while also providing additional options that offer a unique POV to deliver on creative brief</li>
            <li>Attend and participate in creative meetings and status, capture your actions, and complete follow-up tasks.</li>
            <li>Analyze market trends, consumer need, and the competitive landscape, and track campaign performance</li>
            <li>Establish art department standards for production, productivity, quality, and client service</li>
            <li>Ensure team adheres to current processes, identifying opportunities for continuous improvement, and proposing and creating processes and tools to support design operations</li>
            <li>All other duties as assigned</li>
            </ul>
            <p>Qualifications</p>
            <ul>
            <li>Collaborate with project Creative Director</li>
            <li>Develop project style guide and lays out project decks</li>
            <li>Oversee project graphic design</li>
            <li>Concept and design a wide array of creative assets</li>
            <li>Collaborate with creative team to develop concepts and strategic design ideas that can be effectively executed on-time and on-budget</li>
            <li>Take direction from Creative Director and Creative Lead and execute per those overall viewpoint, while also providing additional options that offer a unique POV to deliver on creative brief</li>
            <li>Attend and participate in creative meetings and status, capture your actions, and complete follow-up tasks.</li>
            <li>Analyze market trends, consumer need, and the competitive landscape, and track campaign performance</li>
            <li>Establish art department standards for production, productivity, quality, and client service</li>
            <li>Ensure team adheres to current processes, identifying opportunities for continuous improvement, and proposing and creating processes and tools to support design operations</li>
            <li>All other duties as assigned</li>
            </ul>',
            'description_en' => '<p>As the Art Director, you will manage a team of creatives working on a creative project. You will be responsible for developing and maintaining a clear vision and delivering a captivating visual message that speaks to our audience and consumers. To be successful in the role, we expect you to be a leader who is open to the influence, inspiration, and expertise of the people around them, leveraging the widest array of talents, strengths, and weaknesses.</p>
            <p>Responsibilities</p>
            <ul>
            <li>Collaborate with project Creative Director</li>
            <li>Develop project style guide and lays out project decks</li>
            <li>Oversee project graphic design</li>
            <li>Concept and design a wide array of creative assets</li>
            <li>Collaborate with creative team to develop concepts and strategic design ideas that can be effectively executed on-time and on-budget</li>
            <li>Take direction from Creative Director and Creative Lead and execute per those overall viewpoint, while also providing additional options that offer a unique POV to deliver on creative brief</li>
            <li>Attend and participate in creative meetings and status, capture your actions, and complete follow-up tasks.</li>
            <li>Analyze market trends, consumer need, and the competitive landscape, and track campaign performance</li>
            <li>Establish art department standards for production, productivity, quality, and client service</li>
            <li>Ensure team adheres to current processes, identifying opportunities for continuous improvement, and proposing and creating processes and tools to support design operations</li>
            <li>All other duties as assigned</li>
            </ul>
            <p>Qualifications</p>
            <ul>
            <li>Collaborate with project Creative Director</li>
            <li>Develop project style guide and lays out project decks</li>
            <li>Oversee project graphic design</li>
            <li>Concept and design a wide array of creative assets</li>
            <li>Collaborate with creative team to develop concepts and strategic design ideas that can be effectively executed on-time and on-budget</li>
            <li>Take direction from Creative Director and Creative Lead and execute per those overall viewpoint, while also providing additional options that offer a unique POV to deliver on creative brief</li>
            <li>Attend and participate in creative meetings and status, capture your actions, and complete follow-up tasks.</li>
            <li>Analyze market trends, consumer need, and the competitive landscape, and track campaign performance</li>
            <li>Establish art department standards for production, productivity, quality, and client service</li>
            <li>Ensure team adheres to current processes, identifying opportunities for continuous improvement, and proposing and creating processes and tools to support design operations</li>
            <li>All other duties as assigned</li>
            </ul>',
            ]);
        Careers::create([
        'name' => 'Data Analysis',
        'name_en' => 'Data Analysis',
        'location' => '3',
        'department' => '2',
        'status' => '1',
        'description' => '<p>The Data Analyst will be responsible for analyzing and interpreting large datasets to provide valuable insights and recommendations to the business. They will work closely with cross-functional teams to gather and analyze data, develop reports, and provide customized solutions to help the organization gain a competitive edge.</p>
        <p>Responsibilities</p>
        <ul>
        <li>Analyze large data sets using advanced statistical techniques and tools to uncover trends, opportunities, and insights.</li>
        <li>Develop, maintain and analyze performance metrics and reports that support data-driven decision-making processes.</li>
        <li>Collaborate with stakeholders to identify business questions and translate them into data and analysis requirements.</li>
        <li>Develop models and algorithms to help optimize business processes and drive efficiencies.</li>
        <li>Design and execute A/B tests and experiments to identify opportunities for optimization.</li>
        <li>Identify data quality issues and help to develop solutions to improve data integrity, accuracy, and completeness.</li>
        <li>Manage data collection, cleansing, and manipulation processes to ensure data is readily accessible and easy to work with.</li>
        <li>Prepare and present data-driven reports and insights to stakeholders, highlighting key findings and recommendations.</li>
        </ul>
        <p>Qualifications</p>
        <ul>
        <li>2+ years of relevant experience in data analysis, preferably in the Internet and New Media industry.</li>
        <li>Proven experience in analyzing large and complex datasets using SQL, R, Python, or related tools.</li>
        <li>Strong analytical, critical thinking, and problem-solving skills.</li>
        <li>Excellent communication and collaboration skills, with the ability to work effectively in a team environment.</li>
        <li>Experience with data visualization tools such as Tableau, Power BI, or related tools.</li>
        <li>Knowledge of statistical modeling, hypothesis testing, and A/B testing methodologies.</li>
        <li>Familiarity with data management and ETL processes.</li>
        </ul>',
        'description_en' => '<p>The Data Analyst will be responsible for analyzing and interpreting large datasets to provide valuable insights and recommendations to the business. They will work closely with cross-functional teams to gather and analyze data, develop reports, and provide customized solutions to help the organization gain a competitive edge.</p>
        <p>Responsibilities</p>
        <ul>
        <li>Analyze large data sets using advanced statistical techniques and tools to uncover trends, opportunities, and insights.</li>
        <li>Develop, maintain and analyze performance metrics and reports that support data-driven decision-making processes.</li>
        <li>Collaborate with stakeholders to identify business questions and translate them into data and analysis requirements.</li>
        <li>Develop models and algorithms to help optimize business processes and drive efficiencies.</li>
        <li>Design and execute A/B tests and experiments to identify opportunities for optimization.</li>
        <li>Identify data quality issues and help to develop solutions to improve data integrity, accuracy, and completeness.</li>
        <li>Manage data collection, cleansing, and manipulation processes to ensure data is readily accessible and easy to work with.</li>
        <li>Prepare and present data-driven reports and insights to stakeholders, highlighting key findings and recommendations.</li>
        </ul>
        <p>Qualifications</p>
        <ul>
        <li>2+ years of relevant experience in data analysis, preferably in the Internet and New Media industry.</li>
        <li>Proven experience in analyzing large and complex datasets using SQL, R, Python, or related tools.</li>
        <li>Strong analytical, critical thinking, and problem-solving skills.</li>
        <li>Excellent communication and collaboration skills, with the ability to work effectively in a team environment.</li>
        <li>Experience with data visualization tools such as Tableau, Power BI, or related tools.</li>
        <li>Knowledge of statistical modeling, hypothesis testing, and A/B testing methodologies.</li>
        <li>Familiarity with data management and ETL processes.</li>
        </ul>',
        ]);
        Careers::create([
            'name' => 'Full-stack Development',
            'name_en' => 'Full-stack Development',
            'location' => '2',
            'department' => '3',
            'status' => '1',
            'description' => '<p>Responsibilities</p>
            <ul>
            <li>Code, implement, unit test, maintain and troubleshoot web application.</li>
            <li>Analyzing requirements, writing specifications, improving UI/UX, designing database &amp; coding</li>
            <li>Supporting continuous improvement by investigating alternatives and new technologies</li>
            <li>Ensure the performance, quality, and responsiveness of the application</li>
            <li>Troubleshoot and resolve complex issues related to video streaming, network connectivity, and browser compatibility.</li>
            <li>Completing web development tasks to assigned deadlines.</li>
            <li>Collaborate across time zones via Slack, GitHub comments, documents, and frequent videoconferences</li>
            <li>Reporting and updating the Project Manager with progress.</li>
            </ul>
            <p>Qualifications</p>
            <ul>
            <li>Engineering degree and/or technical background delivering computer-based solutions, a background in IT, computer systems engineering, or systems engineering and analysis.</li>
            <li>At least 2+ years of relevant experience as a full-stack developer</li>
            <li>Strong working experience in Node Js.</li>
            <li>Good working experience in HTML, CSS, jQuery/ Javascript, Typescript, front-end frameworks</li>
            <li>Knowledge of database systems and SQL.</li>
            <li>Knowledge of AWS/Azure is a plus.</li>
            <li>Good time management, communication and problem-solving skills.</li>
            <li>Good teamwork spirit and logical thinking.</li>
            <li>Pay strong attention to detail and deliver high quality code in a timely manner</li>
            <li>Ability to analyze and think quickly and flexibly to handle related issues</li>
            </ul>',
            'description_en' => '<p>Responsibilities</p>
            <ul>
            <li>Code, implement, unit test, maintain and troubleshoot web application.</li>
            <li>Analyzing requirements, writing specifications, improving UI/UX, designing database &amp; coding</li>
            <li>Supporting continuous improvement by investigating alternatives and new technologies</li>
            <li>Ensure the performance, quality, and responsiveness of the application</li>
            <li>Troubleshoot and resolve complex issues related to video streaming, network connectivity, and browser compatibility.</li>
            <li>Completing web development tasks to assigned deadlines.</li>
            <li>Collaborate across time zones via Slack, GitHub comments, documents, and frequent videoconferences</li>
            <li>Reporting and updating the Project Manager with progress.</li>
            </ul>
            <p>Qualifications</p>
            <ul>
            <li>Engineering degree and/or technical background delivering computer-based solutions, a background in IT, computer systems engineering, or systems engineering and analysis.</li>
            <li>At least 2+ years of relevant experience as a full-stack developer</li>
            <li>Strong working experience in Node Js.</li>
            <li>Good working experience in HTML, CSS, jQuery/ Javascript, Typescript, front-end frameworks</li>
            <li>Knowledge of database systems and SQL.</li>
            <li>Knowledge of AWS/Azure is a plus.</li>
            <li>Good time management, communication and problem-solving skills.</li>
            <li>Good teamwork spirit and logical thinking.</li>
            <li>Pay strong attention to detail and deliver high quality code in a timely manner</li>
            <li>Ability to analyze and think quickly and flexibly to handle related issues</li>
            </ul>',
        ]);
    }
}
