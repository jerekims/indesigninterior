<div class="container">
 <div class="jumbotron contactjumbo">
  <h1 class="welcome-comment">Feel free to leave us a comment</h1>
  
  <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
 </div>

 <form id="contact_mesage" name="contact_mesage" role="form" enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label for="UserEmail">Email address</label>
    <input type="email" class="form-control validate[required,custom[email]]" required id="UserEmail" name="useremail" placeholder="Enter Your Email Address">
  </div>

  <div class="form-group">
    <label for="UserSubject">Subject</label>
    <input type="text" class="form-control validate[maxSize[50]]" id="UserSubject" name="usersubject" placeholder="Enter Subject Here">
  </div>

  <div class="form-group">
    <label for="UserMessage">Message</label>
    <!-- <input type="text" class="form-control validate[required]" id="UserMessage" required name="usermessage" placeholder="Enter Message Here"> -->
    <textarea class="form-control validate[required]" id="UserMessage" required name="usermessage" placeholder="Enter Message Here"></textarea>
  </div>
  
  
  
  <button type="submit" class="btn btn-default">Send</button>
</form>

</div>