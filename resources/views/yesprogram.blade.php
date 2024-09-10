@extends("layouts.app")
@section('content')

@push('styles')
<link href="{{asset('css\yesprogram.css')}}" rel="stylesheet">

<style>
    .navbar .navbar-nav li .active{
        color: #ffae00;
    }
    .main-container .left-button-pannel .content-change-button ul .active button{
        color: #fff;
    }
</style>
@endpush

<div class="yes-program-image">
    <div class="bg-image text-center">
        <div class="background">
            <h4>Say yes! to spend a year in <br> the united states!</h4>
        </div>
    </div>
</div>

<div class="main-container">
    <div class="left-image">
        <img src="images/Polygon 5.png" alt="">
    </div>
    <div class="left-button-pannel">
        <div class="title">
            <h2>YES <br> <span>PROGRAM</span></h2>
        </div>
        <div class="content-change-button">
            <ul>
                <li class="active">
                    <button  id="#introduction" onclick="showContent(event, 'introduction')">Introduction</button>
                </li>
                <li>
                    <button  id="#eligibility" onclick="showContent(event, 'eligibility')">Eligibility Criteria</button>
                </li>
                <li>
                    <button  id="#agecalculator" onclick="showContent(event, 'agecalculator')">Age Calculator</button>
                </li>
                <li>
                    <button  id="#application" onclick="showContent(event, 'application')">Application & Selection
                        Process</button>
                    </li>
                    <li>
                        <button  id="#parentstudentagreement" onclick="showContent(event, 'parentstudentagreement')">Parent
                            Student Agreement</button>
                        </li>
                        <li>
                            <button  id="#faqs" onclick="showContent(event, 'faqs')">FAQ'S</button>
                        </li>
                    </ul>
                    <ul class="Guideline-Section">
                        <li>
                            <button onclick="linkopen()">How to Apply ?</button>
                        </li>
                        <li>
                            <button>Apply Now</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-change-content">
                <h6>Kennedy-Lugar Youth Exchange and Study (YES) Program</h6>
                <h1>APPLICATION STATUS: CLOSED</h1>
                
                <div class="content-change active"  id="introduction">
                    <div class="card-content-change ">
                        <h4>Introduction</h4>
                        <p>The U.S. Department of State's Kennedy-Lugar Youth Exchange and Study (YES) program provides high school students the opportunity to spend an academic year as an exchange student in the United States, attending high school and living with an American host family.</p>
                        <p>Students are enrolled for a full academic year at various high schools in the United States, attending classes and participating in extracurricular activities with their American classmates. YES students also participate in special enrichment activities, including community service, youth leadership training, and other activities that help them learn more about American culture. In addition, students serve as “cultural ambassadors” in their host communities, sharing their rich and vibrant culture and educating Americans about Pakistan.</p>
                        <p>The U.S. Department of State collaborates with American Councils for International Education and their partner in-country non-profit organizations to implement the YES Program each year, with participating students coming from 37 different countries at present. In Pakistan, the YES program is implemented in partnership with Society for International Education and iEARN-Pakistan.</p>
                        <p>Since 2003, the YES Program has provided scholarships to over 1,500 high school students from all over Pakistan.</p>
                    </div>
                </div>
                
                <div class="content-change" id="eligibility">
                    <div class="card-content-change2">
                        <h4>ELIGIBILITY CRITERIA</h4>
                        <div class="bullet-points">
                            <ul>
                                <li><p>Be between the ages of 15-17 by the start of the program (August 15, 2024).</p></li>
                                <li><p>Be enrolled in a secondary school in Pakistan and be in 9th or 10th grade or 'O'
                                    Levels at the time of application. (Note for O' Level Students: Only O' Level 9th
                                    grade or O' Level 10th grade students are eligible to apply. O' Level 11th graders
                                    are not eligible.)</p></li>
                                    <li><p>Have a cumulative grade point average of 60% or more. Must have a minimum grade point
                                        average of 60% in all major/core subjects (English, Mathematics, Sciences) and no
                                        failing grades in the past three years (2020-21, 2021-22, and 2022-23 academic years).</p></li>
                                        <li><p>Students with a gap year or a repeated year are ineligible.</p>  </li>
                                        <li><p>Be able to communicate in English.</p></li>
                                        <li><p>Meet U.S. J-1 visa eligibility requirements (for instance, U.S. citizens are not eligible for J-1 visa).</p></li>
                                        <li><p>Be a citizen of Pakistan and reside in Pakistan. Dual nationals of any country will NOT be considered for the program.</p></li>
                                        <li><p>The student must not have travelled to the United States.</p></li>
                                        <li><p>Siblings and children of YES Program alumni are not eligible to participate in the program.</p></li>
                                        <li><p>Siblings and children of Society for International Education and iEARN Pakistan
                                            project staff are not eligible to participate in the program.</p></li>
                                        </ul>
                                        <h3>In addition to the above requirements, students who also meet the following criteria are more
                                            likely to be shortlisted for the final round of selection:</h3>
                                            <ul>
                                                <li><p>The applicant can represent and demonstrate Pakistani culture and values at American schools and communities.</p></li>
                                                <li><p>The applicant demonstrates maturity, flexibility, adaptability, good character, and scholastic aptitude.</p> </li>
                                                <li><p>The applicant is willing to participate in the host family's daily life.</p></li>
                                                <li><p>The applicant has a record of all necessary immunizations, as outlined in the YES Program
                                                    application, before arriving in the United States.</p></li>
                                                    <li><p>The applicant demonstrates flexibility and a commitment to promoting cross-cultural understanding.</p></li>
                                                    <li><p>The applicant agrees to attend classes as a full-time student and maintain at least a 'B' grade average.</p></li>
                                                    <li><p>The applicant agrees to abide by the 'YES Program Student Rules' as outlined in the YES
                                                        Program application and all other rules and policies during the program.</p></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-change" id="agecalculator">
                                            <div class="card-content-change3 ">
                                                <h4>age Calculator</h4>
                                                <div class="age-calculator-container text-center">
                                                    <h2>Select Date of Birth</h2>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <input class="form-control" placeholder="DD / MM / YYYY" id="datepicker" required>
                                                                <i class="fa fa-calendar" id="date-icon2"></i>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <a class="button" type="submit" id="calculateBtn">Check Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p style="display: none;">your age on <span id="textshow"></span> will be</p>
                                                            <p>Your Age on <span>15 August 2025</span> will be</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="txtyears" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="months" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="days" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="content-change" id="application">
                                            <div class="card-content-change4">
                                                <h4>APPLICATION & SELECTION PROCESS</h4>
                                                <div class="question-section">
                                                    <div class="card">
                                                        <div class="card-header step-title" data-toggle="collapse" data-target="#step1">
                                                            STEP-1 Submission of YES Application (Form 1 - 11):
                                                            <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                        </div>
                                                        <div id="step1" class="collapse">
                                                            <div class="card-body">
                                                                <p>Students who fulfill the Selection Criteria and agree to the YES Program
                                                                    Parent/Student Agreement and Policies can apply for the scholarship. (Visit the YES
                                                                    Pakistan website www.yespk.org to find these documents.) Students can download the
                                                                    YES Program application from the website, print out the application, fill it out,
                                                                    and courier it with all required documents to the SIE office. Hand-delivered
                                                                    applications will not be accepted. Instructions and guidelines for filling out the
                                                                    application are available on the website. Students from underserved communities are
                                                                    encouraged to apply.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="card mt-3">
                                                            <div class="card-header step-title" data-toggle="collapse" data-target="#step2">
                                                                STEP-2 Online Interview:
                                                                <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                            </div>
                                                            <div id="step2" class="collapse">
                                                                <div class="card-body">
                                                                    <p>After the initial application review, shortlisted applicants will be invited for an
                                                                        online interview. Students who are shortlisted for online interviews will be
                                                                        notified through the e-mail used to register for the YES Program application.
                                                                        Students who are shortlisted after the online interview will be required to submit
                                                                        Form M (Medical Form) along with the required documents before the next step. Form M
                                                                        will be sent to the shortlisted students via e-mail.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="card mt-3">
                                                                <div class="card-header step-title" data-toggle="collapse" data-target="#step3">
                                                                    STEP-3 Proctored Essays, Group Activity and In-person Selection Interview:
                                                                    <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                </div>
                                                                <div id="step3" class="collapse">
                                                                    <div class="card-body">
                                                                        <p>After the online interview, students who qualify will be required to appear in-person
                                                                            for a proctored essay-writing exercise, group activities, and an in-person
                                                                            interview. Information about the venue and date will be communicated with the
                                                                            students through their registered e-mail.
                                                                            NOTE : The students who fail to submit Form M (Medical Form) along with the required
                                                                            documents by the deadline will not be eligible for the third step.
                                                                        </p>
                                                                        <br>
                                                                        <p><span>Note:</span>
                                                                            The students who fail to submit Form M (Medical Form) along with the required documents by the deadline will not be eligible for the third step.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="card mt-3">
                                                                <div class="card-header step-title" data-toggle="collapse" data-target="#step4">
                                                                    STEP-4 English Language Test for International Students (ELTiS):
                                                                    <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                </div>
                                                                <div id="step4" class="collapse">
                                                                    <div class="card-body">
                                                                        <p>After the in-person interview, qualifying students will be required to take the
                                                                            English language proficiency test (ELTiS).</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="card mt-3">
                                                                    <div class="card-header step-title" data-toggle="collapse" data-target="#step5">
                                                                        STEP-5 Final Evaluation:
                                                                        <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                    </div>
                                                                    <div id="step5" class="collapse">
                                                                        <div class="card-body">
                                                                            <p>The final selection of students will be based on their complete YES Program
                                                                                application, including all required documents, the online interview, the group
                                                                                activity, the in-person interview, and their ELTiS score. The semi-finalists will be
                                                                                notified by a letter from the YES Pakistan Program Director. Keep checking the
                                                                                announcement section of the YES Pakistan website or Facebook page for updates and
                                                                                information.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="important-note">
                                                                        <p><span> Important Note: </span>Providing any false/forged documents or information or any
                                                                            discrepancy found at any stage of the selection process will result in the disqualification of
                                                                            the applicant.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content-change" id="parentstudentagreement">
                                                                <div class="card-content-change5">
                                                                    <h4>PARENT STUDENT AGREEMENT</h4>
                                                                    <p>Carefully review this important information with your parents. </p>
                                                                    <button>Download</button>
                                                                </div>
                                                            </div>
                                                            <div class="content-change" id="faqs">
                                                                <div class="card-content-change6">
                                                                    <h4>FREQUANTLY ASKED QUESTIONS</h4>
                                                                    
                                                                    <div class="faqs-section">
                                                                        <h5>program application:</h5>
                                                                        <div class="card">
                                                                            <div class="card-header step-title" data-toggle="collapse" data-target="#step1">
                                                                                What is the cost of the YES Program?
                                                                                <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                            </div>
                                                                            <div id="step1" class="collapse">
                                                                                <div class="card-body">
                                                                                    <p>The YES program covers all major costs including airfare, U.S. visa fee, boarding and
                                                                                        lodging in the United States, school tuition and a $200 USD monthly stipend.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="card mt-3">
                                                                                <div class="card-header step-title" data-toggle="collapse" data-target="#step2">
                                                                                    Is there any flexibility to the age requirement?
                                                                                    <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                </div>
                                                                                <div id="step2" class="collapse">
                                                                                    <div class="card-body">
                                                                                        <p>The age requirement is not flexible. The student must be at least 15 years old and no
                                                                                            older than 17 years old on August 15, 2024 (the year of travel to the United States).
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="card mt-3">
                                                                                <div class="card-header step-title" data-toggle="collapse" data-target="#step3">
                                                                                    Can I apply to the YES program if I am still unsure that I will participate if selected?
                                                                                    <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                </div>
                                                                                <div id="step3" class="collapse">
                                                                                    <div class="card-body">
                                                                                        <p>Students are highly discouraged from applying unless they are seriously interested in
                                                                                            participating in the program from the very beginning and have the full support and
                                                                                            permission of their family.
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="card mt-3">
                                                                                <div class="card-header step-title" data-toggle="collapse" data-target="#step4">
                                                                                    I have already traveled to the United States. Can I apply?
                                                                                    <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                </div>
                                                                                <div id="step4" class="collapse">
                                                                                    <div class="card-body">
                                                                                        <p>Applicants with previous travel to the United States are not eligible for the program.
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="card mt-3">
                                                                                <div class="card-header step-title" data-toggle="collapse" data-target="#step5">
                                                                                    I am not a Pakistani national, nor do not live in Pakistan. Can I apply?
                                                                                    <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                </div>
                                                                                <div id="step5" class="collapse">
                                                                                    <div class="card-body">
                                                                                        <p>Only Pakistan nationals who study and reside in Pakistan are eligible to apply for the
                                                                                            program.
                                                                                            Students with dual nationality are NOT eligible for the program.
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="card mt-3">
                                                                                <div class="card-header step-title" data-toggle="collapse" data-target="#step6">
                                                                                    What are the medical requirements?
                                                                                    <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                </div>
                                                                                <div id="step6" class="collapse">
                                                                                    <div class="card-body">
                                                                                        <p>Immunization records are very important and required from every student to participate in
                                                                                            the program. In addition to the common immunization requirements in Pakistan, special
                                                                                            vaccinations may be needed, depending on the host state's requirements. Students also
                                                                                            need to clear the TB skin test to attend the program.
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h5>host families:</h5>
                                                                            <div class="card">
                                                                                <div class="card-header step-title" data-toggle="collapse" data-target="#step7">
                                                                                    Where will the students live in the United States?
                                                                                    <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                </div>
                                                                                <div id="step7" class="collapse">
                                                                                    <div class="card-body">
                                                                                        <p>All YES exchange students are placed with American host families for one academic year
                                                                                            and attend an American high school. A consortium of reputable U.S.-based student
                                                                                            exchange organizations that are approved by the U.S. Department of State's Bureau of
                                                                                            Educational and Cultural Affairs make the placements.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                <div class="card mt-3">
                                                                                    <div class="card-header step-title" data-toggle="collapse" data-target="#step8">
                                                                                        What are host families?
                                                                                        <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                    </div>
                                                                                    <div id="step8" class="collapse">
                                                                                        <div class="card-body">
                                                                                            <p>Host families sponsor and welcome the exchange students into their homes. They provide
                                                                                                room, board and overall support and share their everyday lives and culture with the
                                                                                                student. The families are carefully chosen and committed to making the exchange
                                                                                                experience memorable for the student, organizing activities and events and including
                                                                                                them in all aspects of their lives.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="card mt-3">
                                                                                        <div class="card-header step-title" data-toggle="collapse" data-target="#step9">
                                                                                            Where do host families come from?
                                                                                            <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                        </div>
                                                                                        <div id="step9" class="collapse">
                                                                                            <div class="card-body">
                                                                                                <p>Host families represent the diversity of the United States and are from varied ethnic,
                                                                                                    religious, linguistic and socio-economic backgrounds. Students should be prepared to be
                                                                                                    placed with host families from diverse cultural backgrounds.
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="card mt-3">
                                                                                        <div class="card-header step-title" data-toggle="collapse" data-target="#step10">
                                                                                            How are the host families selected?
                                                                                            <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                        </div>
                                                                                        <div id="step10" class="collapse">
                                                                                            <div class="card-body">
                                                                                                <p>American Councils and other placement organizations make every effort to place students
                                                                                                    with families that will complement the student's personality and interests.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="card mt-3">
                                                                                            <div class="card-header step-title" data-toggle="collapse" data-target="#step11">
                                                                                                What is the student's status in the host family?
                                                                                                <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                            </div>
                                                                                            <div id="step11" class="collapse">
                                                                                                <div class="card-body">
                                                                                                    <p>The student will be a member of the host family. Students develop many relationships
                                                                                                        during the ten months on the YES program, however,the relationship with the host family
                                                                                                        is at the heart of the cultural exchange and will likely to be the most important of the
                                                                                                        year. YES students need to possess a strong desire to be part of an American family and
                                                                                                        a willingness to accept responsibilities in their new home. These responsibilities will
                                                                                                        include (for both boys and girls) helping with household chores, keeping one's room
                                                                                                        clean, and abiding by all the host family rules, even if they differ from their
                                                                                                        Pakistani family's rules. YES students who expect to be treated like guests or given
                                                                                                        special consideration in their American families are unlikely to succeed in the program.
                                                                                                        General program policies and rules can be found on the website www.yespk.org or Facebook
                                                                                                        page. https://www.facebook.com/YESProgramPakistanOfficial
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="card mt-3">
                                                                                            <div class="card-header step-title" data-toggle="collapse" data-target="#step12">
                                                                                                Can I live with my relatives?
                                                                                                <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                            </div>
                                                                                            <div id="step12" class="collapse">
                                                                                                <div class="card-body">
                                                                                                    <p>Students are not allowed to be hosted by their relatives in the United States and they
                                                                                                        cannot request to be placed with relatives. Interference from relatives in the United
                                                                                                        States can affect the student's adjustment negatively.
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="card mt-3">
                                                                                            <div class="card-header step-title" data-toggle="collapse" data-target="#step13">
                                                                                                Can a student request to live with a Muslim or a Pakistani family?
                                                                                                <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                            </div>
                                                                                            <div id="step13" class="collapse">
                                                                                                <div class="card-body">
                                                                                                    <p>A student cannot ask the Society for International Education (SIE) or the placement
                                                                                                        organizations to be placed with a Muslim or Pakistani family. The SIE Pakistan office
                                                                                                        does not interfere in the placement of any student.
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="card mt-3">
                                                                                            <div class="card-header step-title" data-toggle="collapse" data-target="#step14">
                                                                                                Are the students safe with the host families?
                                                                                                <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                            </div>
                                                                                            <div id="step14" class="collapse">
                                                                                                <div class="card-body">
                                                                                                    <p>Students are safe with the host families. Host families undergo strict background checks.
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <h5>SOCIAL AND RELIGIOUS ISSUES:</h5>
                                                                                        <div class="card">
                                                                                            <div class="card-header step-title" data-toggle="collapse" data-target="#step15">
                                                                                                Can YES students practice their religion while on theexchange in the United States?
                                                                                                <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                            </div>
                                                                                            <div id="step15" class="collapse">
                                                                                                <div class="card-body">
                                                                                                    <p>YES students can practice their religion very easily. American families and schools can
                                                                                                        make the necessary accommodations. However, there may be limits. For example, students
                                                                                                        should not expect their hosts to prepare sehri or other traditional dishes. They can ask
                                                                                                        their host family if they can prepare it themselves.</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            <div class="card mt-3">
                                                                                                <div class="card-header step-title" data-toggle="collapse" data-target="#step16">
                                                                                                    Can female students wear a head scarf (hijab) while in the United States?
                                                                                                    <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                                </div>
                                                                                                <div id="step16" class="collapse">
                                                                                                    <div class="card-body">
                                                                                                        <p>Female students can wear their headscarves while in the United States and they may even
                                                                                                            see others wearing the hijab. Students can also wear traditional Pakistani clothes to
                                                                                                            school and when they go out. (Note: Girls will be exempted from all activities, sports
                                                                                                            etc. that require them to wear clothes that are against Islamic and Pakistani values.)
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            <div class="card mt-3">
                                                                                                <div class="card-header step-title" data-toggle="collapse" data-target="#step17">
                                                                                                    Can students get halal food?
                                                                                                    <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                                </div>
                                                                                                <div id="step17" class="collapse">
                                                                                                    <div class="card-body">
                                                                                                        <p>Halal meat can be purchased from the halal meat shops in the community or ordered for
                                                                                                            delivery. However, a student cannot demand host parents to serve them halal food.
                                                                                                            Students can buy halal meat from their own stipend and should be prepared to cook any
                                                                                                            additional or special meal they want to eat.
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                            <h5>SCHOOL AND ACADEMICS:</h5>
                                                                                            <div class="card">
                                                                                                <div class="card-header step-title" data-toggle="collapse" data-target="#step18">
                                                                                                    Can students graduate from high school in the United States?
                                                                                                    <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                                </div>
                                                                                                <div id="step18" class="collapse">
                                                                                                    <div class="card-body">
                                                                                                        <p>Students cannot graduate from the U.S. high school, nor does participation in the YES
                                                                                                            program provide the student with a high school diploma. The student will be enrolled in
                                                                                                            grades 10/11 and be given a mark sheet/transcript for the subjects they study and other
                                                                                                            achievement certificates and letters.
                                                                                                            YES students promote mutual understanding, form lasting relations with their host
                                                                                                            families and communities. They also engage in community service and civic education
                                                                                                            activities that provide valuable life skills that can aid them in their future academic
                                                                                                            and professional experiences.
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            <div class="card mt-3">
                                                                                                <div class="card-header step-title" data-toggle="collapse" data-target="#step19">
                                                                                                    Do students miss a school year in Pakistan?
                                                                                                    <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                                </div>
                                                                                                <div id="step19" class="collapse">
                                                                                                    <div class="card-body">
                                                                                                        <p>This will vary depending on the school system in which the student is enrolled. Students
                                                                                                            must discuss this with their schools in Pakistan before applying for the program. If it
                                                                                                            is not possible to get admission to the next higher classes upon their return to
                                                                                                            Pakistan, students must be prepared to lose one year of academic study in Pakistan. </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                
                                                                                                <div class="card mt-3">
                                                                                                    <div class="card-header step-title" data-toggle="collapse" data-target="#step20">
                                                                                                        Can students remain in the United States upon completing the YES program?
                                                                                                        <span class="float-right"><i class="fas fa-angle-down"></i></span>
                                                                                                    </div>
                                                                                                    <div id="step20" class="collapse">
                                                                                                        <div class="card-body">
                                                                                                            <p>Students cannot remain in the United States after completing their program. Attempting to
                                                                                                                do so is illegal and in violation of program rules.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="right-image">
                                                                                    <img src="images/Polygon 6.png" alt="">
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            
                                                                            @push('scripts')
                                                                            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                                                                            <script src="{{asset('js\media.js')}}"></script>
                                                                            <script src="{{asset('js\slidebutton.js')}}"></script>
                                                                            <script src="{{asset('js\main.js')}}"></script>
                                                                            <script src="{{asset('js\searchbar.js')}}"></script>
                                                                            <script src="{{asset('js\nav.js')}}"></script>
                                                                            <script src="{{asset('js\datepicker.js')}}"></script>
                                                                            @endpush
                                                                            @endsection