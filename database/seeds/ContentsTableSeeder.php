<?php

use Illuminate\Database\Seeder;
use App\Content;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::insert([
        	$this->get_how_it_works(),
        	$this->get_faq(),
            $this->get_money_back_guarantee(),
            $this->get_privacy_policy(),
            $this->get_revision_policy(),
            $this->get_disclaimer(),
            $this->get_terms_and_conditions()
        ]);
    }


    function get_how_it_works()
    {
    	$data['type'] 	= 'regular';
    	$data['title'] 	= 'How it works';
    	$data['slug'] 	= 'how-it-works';

    	$data['description'] = '<h5>1. FILL IN OUR SIMPLE ORDER FORM</h5>
                        <p>It has never been easier to place your order. Fill in the initial requirements in the small order form located on the home page and press “continue” button to proceed to the main order form or press “order” button in the header menu. Starting from there let our system intuitively guide you through all steps of ordering process. Submit detailed paper instructions, upload necessary files if needed and provide your contact information – you are almost done!</p>
                        <br><br>
 <h5>2. PROCEED WITH THE PAYMENT</h5>
                        <p>All your payments are processed securely through PayPal. This enables us to guarantee a 100% security of your funds and process payments swiftly.</p>
                        <br><br>
                        <h5>3. WRITER ASSIGNMENT</h5>
                        <p>Next, we match up your order details with the most qualified freelance writer in your field. This process can take a few minutes up to a few hours. However, it highly depends on your deadline. Most of the time, we will assign your writer as quickly as possible to ensure that your order is completed on time.</p>
                        <br><br>
                       <h5>4. WRITING PROCESS</h5>
                        <p>Once we have found the most suitable writer for your assignment, they start reviewing your requirements for the paper. If the designated specialist has questions or needs clarifications, we will contact you right away. In other case, they start working on a masterpiece just for you!</p>
                        <br><br>
                        <h5>5. DELIVERY</h5>
                        <p>Once finished, your final paper will be available for download through your personal dashboard. You will also receive an email notification with a copy of your paper attached to it. Sometimes, the writer may leave a note for you about the order in case there is any additional information that they need to give you.</p>';

       return $data;
    }


    function get_faq()
    {
    	$data['type'] 	= 'regular';
    	$data['title'] 	= 'F.A.Q. — Frequently Asked Questions';
    	$data['slug'] 	= 'faq';

    	$data['description'] = '<h5>How does ProWriter service work?</h5>
<div>
To learn about how our service works, please visit <a href="'.route('how_it_works').'">How It Works</a> page where you can read a detailed explanation of our features, along with a step-by-step guide.
</div>

<br><br>

<h5>How do I place an order</h5>
<div>To place an order, simply navigate over to the Order page and fill in the required information concerning your particular order. Alternatively, you can place your order over the phone or by using either the Live Chat or Email feature at the top of the website or Contacts section.</div>
';

    	return $data;
    }


    function get_privacy_policy()
    {
        $data['type']   = 'legal';
        $data['title']  = 'Privacy Policy';
        $data['slug']   = 'privacy-policy';

        $data['description'] = '<p>This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use <a href="https://prowriters.com" target="_blank">https://prowriters.com</a> ("us", "we", "our", the "Service") and the choices you have associated with that data.</p><p>We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible from <a href="https://prowriters.com" target="_blank">prowriters.com</a></p><p><br></p><h2><br></h2><h2>Definitions</h2><h4>Service</h4><p>Service is the <a href="https://prowriters.com" target="_blank">https://prowriters.com</a> website (prowriters.com).</p><h5>Personal Data</h5><p>Personal Data means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).</p><h5>Usage Data</h5><p>Usage Data is data collected automatically either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p><h5>Cookies</h5><p>Cookies are small pieces of data stored on your device (computer or mobile device).</p><h5>Data Controller</h5><p>Data Controller means the natural or legal person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal information are, or are to be, processed.</p><p>For the purpose of this Privacy Policy, we are a Data Controller of your Personal Data.</p><h5>Data Processors (or Service Providers)</h5><p>Data Processor (or Service Provider) means any natural or legal person who processes the data on behalf of the Data Controller.</p><p>We may use the services of various Service Providers in order to process your data more effectively.</p><h5>Data Subject (or User)</h5><p>Data Subject is any living individual who is using our Service and is the subject of Personal Data.</p><h2><br></h2><h2><br></h2>';

        return $data;
    }


    function get_revision_policy()
    {
        $data['type']   = 'legal';
        $data['title']  = 'Revision Policy';
        $data['slug']   = 'revision-policy';

        $data['description'] = 'Although we provide premium quality academic assistance, it may be necessary to have the delivered product revised. You are entitled to request as many revisions as may be required to make the paper consistent and compliant with your instructions. We offer a 14-day Revision Period for papers less than 30 pages and a 30-day period for papers more than 30 pages. In case a request for revision is not submitted within the stated period, we accept the fact that the client is satisfied with the paper and requires no further actions to be taken in regards to the paper unless extra payment is provided or a new order is placed.<p>To submit the revision request, you just have to log into the account, click on "VIEW" on the required order and you will find a big button "SUBMIT FOR REVISION". There you have to provide all the requirements for the writer.</p>
<p>Every client is eligible for a revision if the revision request adheres to the following requirements:</p> 
<ul>
<li>The revision instructions you submit must be absolutely clear. In addition, they must not contradict the initial guidelines. Should our Quality Assurance Department decide that your original guidelines were followed, your request for revision shall not be processed. In this case, you will need to make a new order for proofreading/editing.</li>
<li>No changes of the paper are allowed to be made by the customer before revision takes place.</li>
<li>No other general terms and conditions are violated.</li>
<li>48 hours (usually much less) should be allowed for the revision to be processed.</li>
</ul>
';

        return $data;
    }


    function get_disclaimer()
    {
        $data['type']   = 'legal';
        $data['title']  = 'Disclaimer';
        $data['slug']   = 'disclaimer';

        $data['description'] = '<h5>SERVICE AVAILABILITY</h5><p>While our writing services shall endeavor to make this site available at all times, we will not be liable if, for any reason, the site is unavailable for any period of time. Access to this site may be suspended at any time without prior notice being given. We are not liable for any damages arising in contract, tort or otherwise from the use of or inability to use this site or any material it contains, or from any action or decision taken as a result of using the site. The materials on this site comprise our views; they do not constitute legal or other professional advice. You should consult your professional adviser for legal or other advice.</p><h5>LINKS DISCLAIMER</h5><p>This site offers links to other sites, thereby enabling you to leave it and go directly to the linked site. We are not responsible for the content of any linked site or any link on a linked site. We are not responsible for any transmission received from any linked site. The links are provided to bring visitors to our website, and the inclusion of a link does not imply that we endorse that information or have approved the linked site.</p><h5>USE OF RECEIVED PIECES OF WRITING</h5><p>You may not put your name on the delivered pieces of writing (hereinafter referred to as "Product"). All Products and/or other written materials delivered to you are for research and/or reference only. We do not condone, encourage, or knowingly take part in plagiarism or any other acts of academic fraud or dishonesty. We strongly adhere to and abide by all copyright laws, and will not knowingly allow any Customer to commit plagiarism or violate copyright laws. You agree that any Product and/or other written material delivered to you is provided only as a model, example document for research use, and any text and/or ideas from our document that you borrow, reference, refer to, or otherwise use in any way in your own original paper must be properly cited and attributed to this Website.</p><p>Neither our company nor any of our affiliates and/or partners shall be liable for any unethical, inappropriate, illegal, or otherwise wrongful use of the Products and/or other written material received from our Website. This includes plagiarism, lawsuits, poor grading, expulsion, academic probation, loss of scholarships/awards/grants/prizes/titles/positions, failure, suspension, or any other disciplinary or legal actions. The buyer of material from our Website is solely responsible for any and all disciplinary actions arising from the improper, unethical, and/or illegal use of the material.</p><p>The company will not be liable for any delays or technical problems in the delivery of the Product resulting from any malfunction of Customer\'s mail-server or Customer\'s Internet Service Provider.</p><p>We don\'t guarantee any particular grade, and you cannot ask for a refund in case you were poorly assessed.</p><h5>PLAGIARISM</h5><p>The plagiarism level that is regarded as acceptable by us is below 10%. If the plagiarism level is higher, you have the right to ask for a revision or a refund. For additional information considering these issues, you are free to view our&nbsp;<a href="/money-back-guarantee" target="_blank">Money Back Guarantee</a>&nbsp;and&nbsp;<a href="/revision-policy" target="_blank">Revision policy</a>. Please note that bibliographical references (in-text referencing and the bibliography page at the end of the paper) and cliched phrases (idioms, standard phrases, connectors and other frequently used phrases) shall not be regarded as plagiarism and shall not be included in the plagiarism level calculation.</p><h5>PAYMENT</h5><p>The prices you see in the Prices section of the website do not include VAT. It is charged only to customers from the European Union. It will be added to the cost of the order in the process of payment transaction. VAT is non-refundable.</p><h5>PROOFREADING</h5><p>If you place an order for proofreading/editing, you cannot expect the writer to change more than 30% of the text. Proofreading is essentially us checking the work for you for any spelling, grammatical, punctuation, and stylistic errors or plagiarized parts (we scan every submitted document for plagiarism). You also cannot expect the writer to rewrite or create a brand new piece from what you upload. Nor can you ask the writer to rewrite an online article and still be charged for proofreading.</p>';

        return $data;
    }


    function get_terms_and_conditions()
    {
        $data['type']   = 'legal';
        $data['title']  = 'Terms and Conditions';
        $data['slug']   = 'terms-and-conditions';

        $data['description'] = '<div><h2>Terms of use</h2><p>Your use of this website constitutes your agreement with the terms and conditions as stated below. If you disagree with any of these terms and conditions, do not use this website. If you are an underage person, you are not allowed to access or use this website. You further acknowledge and agree that you must be of legal age to purchase any of our products or services available on this website. By submitting the order form and/or payment, you confirm that you have fully read, understood and agreed to be legally bound by these terms and conditions, which form the entire agreement between this web site and you.</p><h2>Interpretation</h2><p>In this document: "Website" means prowriters.com, "Customer", "You" or "Yours" mean and refer to you and/or any other person submitting the Order to the Website on your behalf. "Company", "We" or "Our" mean and refer to prowriters.com, Inc. "Product" means an original essay, paper, and/or other written Product that is drafted and delivered to the Customer in accordance with his/her Order. "Order" means a written order of the standard electronic form that is filled and submitted online by the Customer to Our Website. Order specifies the scope of work and other requirements of the Customer regarding the Product.</p><h2>Our services</h2><p>By submitting an Order and/or payment, You are purchasing the Product for Your personal, noncommercial use only. All Products are drafted by freelance writers who transferred all the rights and ownership regarding the Products to the Company. You can find more details about Our services on the page&nbsp;<a href="/how-it-works">How it works</a>. It is Your obligation to read these Terms and Conditions and the page&nbsp;<a href="/how-it-works"> How it works </a>&nbsp;before submitting any Order and/or payment to this Website.</p><h2>Refunds</h2><p>The Products are refundable only in the cases stated in the&nbsp;<a href="/money-back-guarantee">Money Back Guarantee</a>&nbsp;document. Please, view it for additional information on this issue. Mind that if You live in the European Union and have paid VAT in the process of payment transaction, You do not receive it back with a refund. You get back only the money or a percent of the price stated in the&nbsp;<a href="/prices">Prices</a>&nbsp;section of the Website. VAT is non-refundable. Please note that Discounts are not subject to refunds either.</p><h2>Copyright &amp; personal use</h2><p>The Products delivered to You are completely original. The full copyright to the Products and other materials delivered to You is retained by the Company and/or its affiliates and partners. Your use of the delivered Products and other materials available from this Website is for Your personal, noncommercial use only. You shall not distribute, publish, transmit, modify, display or create derivative works from or exploit the Products and/or contents of this Website without a prior written consent of the Company. You shall indemnify, defend and hold harmless the Company for any and all unauthorized uses You may make of any material available from this Website. Any unauthorized use of the delivered Products and/or content of this Website may subject You to civil or criminal penalties.</p><h2>No plagiarism</h2><p>You acknowledge that the Company reserves the right to cancel any agreement, contract or arrangement with any person who condones or attempts to pass plagiarized Product as original when asking for editing or proofreading. You also agree that any Product delivered by the Company may not be passed to third parties or distributed in any way for payment or for any other purpose. You also acknowledge that if the Company suspects that the delivered Product has been distributed or has been used by You in any form of plagiarism, the Company reserves the right to refuse to carry out any further work and services for You and subject You to criminal or civil penalties. You may not put Your name on the delivered Product. All the Products and/or other written materials delivered to You are for research and/or reference only. We do not condone, encourage or knowingly take part in plagiarism or any other acts of academic fraud or dishonesty. We strongly adhere to and abide by all copyright laws and will not knowingly allow any Customer to commit plagiarism or violate copyright laws. You agree that any Product and/or other written material delivered to You is provided only as a model, example document for research use, and any text and/or ideas from Our document that You borrow, reference, refer to or otherwise use in any way in Your own original paper must be properly cited and attributed to this Website. Neither the Company nor any of its affiliates and/or partners shall be liable for any unethical, inappropriate, illegal or otherwise wrongful use of the Products and/or other written material received from Our Website. This includes plagiarism, lawsuits, poor grading, expulsion, academic probation, loss of scholarships/awards/grants/prizes/titles/positions, failure, suspension or any other disciplinary or legal actions. The buyer of the material from this Website is solely responsible for any and all disciplinary actions arising from the improper, unethical and/or illegal use of the material. The plagiarism level that is regarded as acceptable by Us is below 10%. In case the plagiarism level is higher, You have the right to ask for a revision or refund. For additional information considering these issues, You are free to view Our&nbsp;<a href="/money-back-guarantee">Money Back Guarantee</a>&nbsp;and&nbsp;<a href="/revision-policy">Revision Policy</a>. Please mind that the bibliographical references (in-text referencing and the bibliography page at the end of the papers) as well as cliched phrases (idioms, standard phrases, connectors, and other frequently used phrases) shall not be regarded as plagiarism and shall not be included in the plagiarism level calculation.</p><h2>Plagiarism Report</h2><p>We are happy to introduce our new Additional paid feature - Plagiarism checker which is available for you on the <a href="/order">Order form page</a>. We believe that this option will help to reach the best from our cooperation.</p><p>Please review our terms and conditions below to know in which cases it’s eligible for a refund request from client’sside:</p><ul class="list-normal"><li>upon choosing the Plagiarism checker feature initially - it will be already included for all future edits ofyour paper which can be done due to our Revision Policy.</li><li>while placing an order for the Editing option and choosing Plagiarism checker option - we are forced to checkthe originally uploaded paper by the customer to prevent any misunderstandings in the future;</li></ul><p>Requests are accepted either within 14 days of delivery for papers that are less than 30 pages long or within 30daysof delivery for papers that exceed 30 pages.</p><p>At writemypaper4me.org (any other websites), we believe in high-quality cooperation and clear Polices for customers.Should you have any questions - please, do not hesitate to contact our helpful Customer Support team via phone,email, or Live Chat and we will be more than happy to answer all your questions and find the best solutions for bothsides.</p><h2>Our guarantees</h2><p>We guarantee that the paper\'s plagiarism level is lower than 10% (not including bibliographical references and cliched phrases); that we follow all your instructions; that we follow the formatting requirements that you state; that we conduct the necessary research; that we comply with the formal standard English style. We don\'t guarantee any particular grade, and You cannot ask for a refund in case You received an unsatisfactory mark.</p><h2>Order placement</h2><p>When You decide to place an Order or inquiry (quote) on the Website, You agree to fill in an online form. There, You will be asked to provide certain personal information necessary to perform the Order. The Company shall on no condition disclose the information to any third parties. For further reference, please view our&nbsp;<a href="/privacy-policy">Privacy Policy</a>.</p><h2>Privacy policy.</h2><p>Note that Your email address will be used to send You notifications considering the most important stages of Order fulfillment such as clarification of any issues, unread messages, and Order completion. Your telephone number will be used only for urgent notifications. As soon as You complete the form, the price for Your Order will be calculated on the basis of deadline, type of work, academic level and the number of pages that you choose. The deadline timer will start counting down only after You perform the payment.</p><h2>Fees and payment</h2><p>The Company\'s charges for the services provided are shown on the Company\'s Website. Please, note that VAT is not included in the prices listed. It is charged to customers from the European Union only. It will be added to the cost of the order in the process of payment transaction. We remind you again that VAT and Discounts are not refundable. If a Customer requires a type of work that cannot be classified as a regular type of services provided on the Company\'s Website or if a Customer requires the finished Product to be amended in a way that is inconsistent with the initial Order instructions, the Company may set own rate for delivery of the Service. A Customer is invited to pay for the Order in advance, given the Company is reasonably confident that it is able to allocate a freelance writer to deliver the Product. If a payment in advance has been provided, but the Company was not able to allocate a freelance writer to deliver the work, a full refund of the payment made in advance will be provided. Other cases of refunds are described in the&nbsp;<a href="/money-back-guarantee">Money Back Guarantee</a> document.</p><h2>Delivery of completed product</h2><p>Upon completion, a Product is available for download by the Customer in his or her personal dashboard page on the Website. If a Customer does not receive a finished Product by the deadline or within 3 (three) hours after the deadline that you have indicated in the initial requirements, the Customer is entitled to receive a certain amount of refund. For further information on this question, view Our&nbsp;<a href="/money-back-guarantee">Money Back Guarantee</a>&nbsp;document. The Company will not be liable for any delays or technical problems in delivery of the Product resulting from any malfunction of the Customer\'s mail-server or the Customer\'s Internet Service Provider.</p><h2>Free revision guarantee</h2><p>Free revisions are possible only in the cases stated in the&nbsp;<a href="/revision-policy">Revision Policy</a>. Please view it for further information on this issue.</p><h2>Privacy &amp; security</h2><p>We do not store Your credit card details, nor do we share the Customer details with any third parties. For a full explanation of the Company\'s practices and policies related to the collection, use and storage of the online guests\' information, please read Our&nbsp;<a href="/privacy-policy">Privacy Policy</a>.</p><h2>Warranties</h2><p>By submitting an Order and/or payment, You acknowledge that You are in complete understanding and agreement with the statements above as well as with each of the following: Any information and/or ideas used from the Product must be properly cited. All Products are provided solely as examples to research, reference, and/or for you to learn how to properly write a paper in a particular citation style (MLA, APA, Chicago, Turabian, Harvard, etc.). All Products were acquired from freelance writers who transferred all the rights and ownership to the Company and/or its affiliates and partners. You are in agreement that this Website is acquiring payment for the time and effort that goes into gathering, organizing, correcting, editing, posting, and delivering these reference materials and the maintenance, administration, and advertising of this Website for educational access. Aside from a reasonable number of copies for personal, non-commercial use, You may not otherwise reproduce, distribute, publish, transmit, modify, display or create derivative works from or exploit the Products and/or contents of this Website without a prior written consent of the Company. You agree to destroy all the delivered Products immediately after Your research/reference use of the material is complete. No copies shall be made for distribution, and no parts of any Product shall be used without proper citation.</p><h2>Limitation of liability</h2><p>You agree to release and hold the Company and its employees, officers, directors, shareholders, agents, representatives, affiliates, subsidiaries, advertising, promotion and fulfillment agencies, any third-party providers or sources of information or data and legal advisers (the "Company\'s Affiliates") harmless from any and all losses, damages, rights, claims, and actions of any kind arising from or related to the Products, including but not limited to: (a) telephone, electronic, hardware or software, network, Internet, email, or computer malfunctions, failures or difficulties of any kind; (b) failed, incomplete, garbled or delayed computer transmissions; (c) any condition caused by events beyond the control of the Company that may cause the Product to be delayed, disrupted, or corrupted; (d) any injuries, losses or damages of any kind arising in connection with or as a result of utilizing Our services; or (e) any printing or typographical errors in any materials associated with Our services. In addition, You agree to defend, indemnify, and hold the Company and Company\'s Affiliates harmless from any claim, suit or demand, including attorney\'s fees made by a third party due to or arising out of Your utilizing of Our services, Your violation or breach of these Terms and Conditions, Your violation of any rights of a third party or any other act or omission by You.</p><p>IN NO EVENT SHALL THE COMPANY BE LIABLE FOR ANY DIRECT, INDIRECT, PUNITIVE, INCIDENTAL, SPECIAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE USE OF THIS WEB SITE OR ANY INFORMATION PROVIDED ON THIS WEB SITE. BECAUSE SOME STATES OR JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, THE ABOVE LIMITATION MAY NOT APPLY TO YOU.</p><p>You acknowledge and agree that We may unilaterally change these Terms and Conditions. We recommend reviewing these Terms and Conditions from time to time as any such changes will be reflected in this section of Our Website.</p><h2>Premium Writer</h2><p class="text-justify">The Premium Writer option means that your paper will be completed by one of the writers who has worked with us for over 5 years and proved their reliability in over 500 quality papers delivered on time.</p><p class="text-justify">The “Premium writer” feature is non-refundable.&nbsp;</p><h2>Preferred Writers</h2><p class="text-justify">Preferred Writers is an option enabling our customers to assign their orders to specific writers. Such writers can be those who have already delivered some papers to the customer. If the customer selects only one writer, who is not rated as a Premium Writer in our writers’ network, the Preferred Writer option will not be reflected on the order’s cost.&nbsp;</p><p class="text-justify">Alternatively, there are two scenarios, in which additional fees will be collected:</p><ol><li>A writer selected as a preferred one while making an order is the Premium Writer.</li><li>Two or more writers are indicated as preferred ones while making an order, regardless of their rating.&nbsp;</li></ol><p class="text-justify">The “Preferred Writers” feature is non-refundable.&nbsp;</p></div>';

        return $data;
    }


    function get_money_back_guarantee()
    {
        $data['type']   = 'legal';
        $data['title']  = 'Money Back Guarantee';
        $data['slug']   = 'money-back-guarantee';

        $data['description'] = '<p>Thank you for choosing our writing services. We also want to make sure you have a rewarding experience while you’re exploring, evaluating, and purchasing our products. The main thing to remember is that by placing an order at <a href="/" target="_blank">prowriters.com</a>, you agree to the terms set forth below along with <a href="/terms-and-conditions" target="_blank">Terms and Conditions</a> and <a href="/privacy-policy" target="_blank">Privacy Policy</a>.</p><p>We understand, however, that sometimes a product may not be what you expected it to be. In this unlikely event, we invite you to review the following terms related to returning a product:</p><p><br></p><ol><li>There is a payment issue (identical orders, double payment, etc.);</li><li>We are not able to find a writer for your order;</li><li>In case the order is late, it can be cancelled. Customer gives up all rights to use any material delivered during the order progress. Writer stops working on the paper. (Does not apply to revisions)</li><li>Substantial level of plagiarized material (more than 10%) is detected in the paper and an official plagiarism report is presented;</li><li>The research is off-topic or does not match the requirements that were clearly stated by the client in the order description (such cases fall under QAD jurisdiction).</li></ol><p><br></p><p>Kindly be informed that if you are not satisfied with the overall quality of the paper you have received, you may request a partial or full refund. All the refund requests are processed on the case-to-case basis, which means that every paper is unique and demands a flexible approach. In this case, we will send your paper to our independent Quality Assurance Department to have it graded and proofread.You may only apply for a refund within 14 days after the deadline chosen in the order if your paper is less than 30 pages, or 30 days if the paper is 30+ pages long. The grading process takes up to 48 hours. Our Quality Assurance Department calculates the percentage of incorrect content and evaluates an amount of refund respectively.</p><p><br></p><p>There are several important points you need to consider when setting the order on dispute:</p><p><br></p><ol><li>In case of a dispute, you have to provide strong reasons, facts, and examples to back up your claim;</li><li>It may take up to 48 hours for us to resolve the dispute: communicate with the writer, send the paper for evaluation, etc. Sometimes we may ask for additional materials or evidence to support your request;</li><li>Each case is reviewed individually; every decision concerning refund is taken after careful consideration. The refund percentage is suggested independently in each case.</li></ol><p><br></p><p>In case you cancel your order when the writer has already been assigned to it, we will request the completed draft from the writer (which is provided within 3 hours after your request is made) and decide on the refund amount based on the latter. Please note, that the exact percentage of refund is decided individually for every order depending on the level of completion. Along with a refund, a client is eligible to receive an unfinished paper that had been written by the time a cancellation request was received.Please note that as soon as we assign the writer to your order, you cannot ask for any changes to the initial instructions. If you do come up with any kind of changes to the initial instructions, we reserve ourselves the right to take a decision on taking into account those changes or not. When asking for full refund, you don\'t have the right to use the paper and all the additional materials we provided in the course of work. All these materials become the property of our company, and we reserve the right to publish the paper online for commercial purposes. We do not keep any kind of essay databases and ‘publish on-line\' means that if the paper is Googled or checked with any kind of plagiarism software, it will link back to our website. It may also be published as content or as a sample essay. This is done to protect our writers’ work in those cases when a customer claims a refund for the paper that has already been completed. Please, be aware that we do not guarantee any particular grade, which is why you are not eligible for a refund in case you were poorly assessed.</p><p><br></p><p>We encourage our customers to contact our Customer Support Team VIA the Phone (toll free), Live Chat or Email in case you believe you can qualify for a refund or have other issues concerning your order. We shall review your case carefully and come up with the most justified solution.</p><p><br></p><p>Please note that if you live on the territory of the European Union and paid VAT in the process of payment transaction, you do not receive it back with a refund. You get back only the money or a percent of the price stated in the Prices section of the website. VAT is non-refundable.</p>';

       return $data;
    }

}
