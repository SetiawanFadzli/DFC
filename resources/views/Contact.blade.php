 @extends('layouts.main')
 
 @section('container')
      <div class="text">
        <h2>Contact</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, adipisci obcaecati! Accusamus fugiat obcaecati nesciunt maiores rerum placeat amet voluptatibus cumque soluta similique saepe, assumenda eos dolorum autem. Iusto enim accusamus optio cupiditate earum ipsam!</p>
      </div>
      <div class="slider" style="background-color:red">
         <form action="/contactcreate" method="POST">
		   @csrf
			<div class="mail_section_1">
			   <input type="text" class="mail_text" placeholder="Name" name="name">
			   <input type="text" class="mail_text" placeholder="Phone Number" name="phone"> 
			   <input type="text" class="mail_text" placeholder="Email" name="email">
			   <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message"></textarea>
			   <div class="send_bt">
					<button type="submit" class="mt-6 mb-0 btn btn-white btn-sm float-end">SEND</button>
			   
					<!--<a href="#">SEND</a>-->
				</div>
			</div>
		 </form>
      </div>
    @endsection