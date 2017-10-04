    <!-- GET IN TOUCH -->
    <section id="contact" class="contact-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="wow zoomIn col-xs-12 text-center p-padding">
                    <h1 class="section-title">Liên hệ</h1>
                    <p>Westpoint Nam 32 đang có chương trình ưu đãi. Quý khách vui lòng liên hệ bộ phận Kinh doanh để được cung cấp đầy đủ thông tin về chương trình ưu đãi này.</p>
                </div>
                <!-- col-xs-12 -->
                <div class="wow zoomIn col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <form name="contactForm" id='contact_form' method="post" action='php/email.php'>
                        <div class="form-inline">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Họ và Tên">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="Địa chỉ email">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="subject" id="exampleInputSubject" placeholder="Tiêu đề">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="company" id="exampleInputCompany" placeholder="Công ty">
                            </div>
                            <div class="form-group col-sm-12">
                                <textarea class="form-control" name="message" rows="3" id="exampleInputMessage" placeholder="Nội dung"></textarea>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <div id='mail_success' class='success' style="display:none;">Thư của bạn đã được gửi.
                            </div>
                            <!-- success message -->
                            <div id='mail_fail' class='error' style="display:none;"> Xin lỗi, đã có lỗi trong quá trình gửi thư.
                            </div>
                            <!-- error message -->
                        </div>
                        <div class="form-group col-sm-12" id='submit'>
                            <input type="submit" id='send_message' class="btn  btn-lg costom-btn" value="send">
                        </div>
                    </form>
                </div>
                <!-- /.col-xs-12 .col-sm-offset-2 .col-sm-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- get in touch -->