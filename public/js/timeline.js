
// Ajax setup
$.ajaxSetup({
   headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') }
});

getPosts();


function getPosts(){
  $.ajax({
      type: 'get',
      url: '/posts',
      dataType: 'json',
      success: function(data){
          $('#post').html('');
          $.each(data, function(index,value){

            var data = `<div class="post-card d-flex flex-column flex-md-row border rounded p-2 mt-2">
  <a href="" class="more-btn"><i class="fas fa-ellipsis-h"></i></a>
  <div class="time-privacy">${value.created_at} <i class="fas fa-user-friends"></i></div>
  <div class="full-width">
      <div class="d-flex">
          <div class="user-details-toggoler">
              <div class="user-details-toggoler">
                  <img src="./dist/img/user-data/profile/${value.user.profile}" alt="tanya">
                  <div class="user-details-card p-2">
                      <div
                          class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start details-card-top">
                          <div><img src="./dist/img/user-data/profile/${value.user.profile}"  class="profile-img">
                          </div>
                          <div class="ml-3">
                              <h4 class="profile-name mb-1">
                                  <a href="#">${value.user.name}</a>
                                  <img src="./images/details-card-flag.png" alt="details-card-flag">
                              </h4>
                              <span class="text-success">Active Now</span>
                              <div class="social">
                                  <a href="mailto:"><i class="far fa-envelope text-white pr-2"></i><span
                                          class="link">demo@demo.com</span></a>
                                  <br>
                                  <a href="#"><i class="fas fa-globe text-white pr-2"></i><span
                                          class="link">www.fyrestream.com</span></a>
                              </div>
                          </div>
                      </div>
                      <div
                          class="details-card-bottom d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start flex-wrape my-2">
                          <a href="#!" class="btn text-white mr-2"><i class="fas fa-user-plus pr-2"></i></i>Add
                              Friend</a>
                          <div>
                              <p class="text-white mb-0"><span class="font-weight-bold pr-1">Member
                                      since:</span><span>January 4, 2019</span>
                              </p>
                              <p class="text-white mb-0"><span
                                      class="font-weight-bold pr-1">Followers:</span><span>11,612</span>
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="user-details-card p-2">
                  <div
                      class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start details-card-top">
                      <div><img src="./dist/img/user-data/profile/${value.user.profile}" alt="tanya" class="profile-img">
                      </div>
                      <div class="ml-3">
                          <h4 class="profile-name mb-1">
                              <a href="#">${value.user.name}</a>
                              <img src="./images/details-card-flag.png" alt="details-card-flag">
                          </h4>
                          <span class="text-success">Active Now</span>
                          <div class="social">
                              <a href="mailto:"><i class="far fa-envelope text-white pr-2"></i><span
                                      class="link">${value.user.email}</span></a>
                              <br>
                              <a href="#"><i class="fas fa-globe text-white pr-2"></i><span
                                      class="link">www.fyrestream.com</span></a>
                          </div>
                      </div>
                  </div>
                  <div
                      class="details-card-bottom d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start flex-wrape my-2">
                      <button  data-id='${value.user_id}' class="addFriendButton btn text-white mr-2"><i class="fas fa-user-plus pr-2"></i>Add Friend</button>
                      <div>
                          <p class="text-white mb-0"><span class="font-weight-bold pr-1">Member
                                  since:</span><span>January 4, 2019</span>
                          </p>
                          <p class="text-white mb-0"><span
                                  class="font-weight-bold pr-1">Followers:</span><span>11,612</span>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <ul class="list-inline mb-0 ml-2">
              <li class="list-inline-item">
                  <h5 class="profile__name">${value.user.name}</h5>
              </li>
              <li class="list-inline-item mr-2">Shared a
                  <a href="#" class="shared-link">Link</a></li>
              <li class="list-inline-item"><i class="fas fa-globe-americas"></i></li>
              <li>
                  <div class="review">
                      <span class="ratings">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                      </span>
                      <span class="rate-it">
                          Rate it <a href=""><i class="far fa-star"></i></a>
                          <div class="ratings-on-hover">
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                          </div>
                      </span>
                  </div>
              </li>
          </ul>
          <br>
          <br>
          <br>
      </div>

      <p class="post__details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
          et
          hendrerit Integer pellentesque, ipsum eget eleifend gravida,<a href="#" class="link">read
              more</a></p>
      <h3 class="${value.post_text == null ? 'd-none': ''}">${value.post_text}</h3>
      <div class="post__img rounded overflow-hidden ${value.post_file == null ? 'd-none': ''}">
          <img src="./storage/photos/posts/${value.post_file}" class="w-100">
      </div>
      <div class="post-stats">
          <span><i class="far fa-comment"></i> ${value.comments.length}</span>
          <span class="span-right"> <img src="./images/Like-Fyrestream High Quality.png"
                  class="rounded-like" alt=""> ${value.reaction.length}</span>
      </div>
      <div class="post__reacts border-top mt-2 py-2" data-id='${value.id}'>
          <ul class="list-inline mb-0 row" >
              <li class="list-inline-item like-btn col-md-4 col-sm-4 col-4 ">
                  <i class="fas fa-thumbs-up"></i><span> Like</span></li>
              <li class="list-inline-item col-md-4 col-sm-4 col-4"><a href="#"><i class="fas fa-share"></i>
                      <span>Share</span></a></li>
              <li class="list-inline-item comment-btn col-md-4 col-sm-4 col-4"><i class="far fa-comment-alt"></i><span>
                      Comment</span></li>
          </ul>

          <div class="detailBox m-2">
              <div class="actionBox">
                  <ul class="commentList pushComment-${value.id}">
                  `
                  for(comment of value.comments){
                    var data = data +  `<li>
                          <div class="commenterImage">
                              <img src="./dist/img/user-data/profile/${comment.user.profile}" />
                          </div>
                          <div class="commentText">
                              <p class="">${comment.text}`

                              if(user.id == comment.user.id){
                               var data =  data + `<span data-id='${comment.id}' class='commentDeleteButton'> Delete</span>`
                              }


                        var data = data +    `</p> <span class="date sub-text">on ${comment.created_at}</span>

                          </div>
                      </li>`
                  }

               var data = data +   ` </ul>
                  <form class="form-inline" role="form">
                      <div class="form-group">
                          <input  class="comment-${value.id} form-control" type="text" placeholder="Your comments" />
                      </div>
                      <div class="form-group">
                          <button data-id='${value.id}'  class="submitComment ml-2 btn btn-primary">Submit</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>`
              $('#post').append(data)
       });
       console.log(data)
      },
      error: function(e){
          console.log(e);
      }


  })
}


   var formData = new FormData();
   var text = $('#sharePostText');
    $('#file').on('change', function(){
        var file = $(this)[0].files[0];
        formData.append('post_file', file);
    });


$('#sharePostSubmit, #sharePostSubmitMoment').on('click', function(){
   if(text.val() != ''){
      formData.append('post_text', text.val());
   }

   if($('#file')[0].files.length != 0 || text.val() != '') {
      $.ajax({
      type:'POST',
      url: "/posts",
      data: formData,
      cache:false,
      contentType: false,
      processData: false,
      success: (data) => {
         getPosts();
         $('#exampleModal').modal('hide');
         $('#exampleModal1').modal('hide');
         formData = new FormData();
         text.val('');
         $('#file').val('');

      },
      error: function(data){
         console.log(data);
       }
     });
   }

})

// Comment js



$('body').on('click', '.commentDeleteButton', function (e) {
  e.preventDefault();
  var comment_id = $(this).data('id');
  var self = $(this);
  $.ajax({
         type:'delete',
         url: '/comments/'+comment_id,
         success: function(response){
             console.log(self)
          self.parent().parent().parent().html(response);
         }
     })
});


$('body').on('click', '.submitComment', function (e) {
  e.preventDefault();
  var post_id = $(this).data('id');
  var text = $('.comment-'+ post_id);
  if(text.val() == '')  return;
  $.ajax({
         type:'post',
         data: {post_id : post_id, text: text.val()},
         url: '/comments',
         success: function(response){
             console.log(response);
             var data = `<li>
                          <div class="commenterImage">
                              <img src="./dist/img/user-data/profile/${user.profile}" />
                          </div>
                          <div class="commentText">
                              <p class="">${response.text} <span data-id='${response.id}' class='commentDeleteButton'> Delete</span></p> <span class="date sub-text">on ${response.created_at}</span>

                          </div>
                      </li>`;
              $('.pushComment-'+ post_id).append(data);
              text.val('');

         }
     })
});





//  Like js



$.ajax({
  type:'get',
  url: '/getLike',
  success: function(data){
      $.each(data, function(i,v){
          $.each($('.like-btn'),function(){
             if(v.post_id === $(this).parent().parent().data('id') && v.reaction == 1){
              $('[data-id="'+v.post_id+'"]').find('i').addClass('text-primary')
             }

          })

      })
  }
})


$('body').on('click', '.like-btn', function () {
  var post_id = $(this).parent().parent().data('id');
  $(this).find('i').toggleClass('text-primary');

  var reaction;

  if($(this).find('i').hasClass('text-primary')){
      reaction = '1';
  }else{
      reaction ='0';
  }
  $.ajax({
         type:'post',
         data: {post_id : post_id, reaction : reaction},
         url: '/reactions',
         success: function(response){
             console.log(response);
         }
     })
});

// Comment js

$('body').on('click', '.comment-btn', function () {
  console.log($(this).parent().parent().data('id'));
  $(this).parent().parent().children('.detailBox').toggle(500)
});

// Mark read notification js


$('body').on('click','.dropdown-toggle', function(){
    let self = $(this)
    $.ajax({
        type:'get',
        url: '/markAsRead',
        success : function(){
            self.find('.notify').remove()
        }

    })

})

// Follower js

$.ajax({
    type:'get',
    url : '/followers',
    success: function(data){
        $.each(data, function(i,v){
            console.log(data)
            $.each($('.addFriendButton'),function(){
               if(v.following_id === $(this).data('id') && v.status == 0){
                    $(this).text('Request Sent');
               }
               if(v.following_id === $(this).data('id') && v.status == 1){
                $(this).text('Following');
               }
            })

        })
    }
})

$('body').on('click','.addFriendButton', function(){

    let id =  $(this).data('id');
    var self = $(this);
    if($(this).is(':contains("Friend")')){
    $.ajax({
        type:'post',
        url : '/followers',
        data: {following_id: id},
        success: function(data){
            self.text('Request Sent');
        }
    })
    }
})

$('body').on('click', '.acceptFollowBtn', function(e){
    e.preventDefault();
    var follow_id = $(this).parent().data('id');
    var action = $(this).data('action');
    var self = $(this);
    console.log(action);

    $.ajax({
        type: 'post',
        url:'/followersMarkAsRead',
        data: {follow_id: follow_id,action:action},
        success: function(data){
            self.parent().text(data);
        }

    })
})

// Search js

$( "input[type='search']" ).bind('focus', function() {
    $('#searchArea').show();
});

$( "input[type='search']" ).bind('blur', function() {
    $('#searchArea').hide();
});
$('body').on('keypress', 'input[type="search"]', function(e){
    let val = $(this).val();

    if(val.length > 2){
        $.ajax({
            type: 'post',
            url: '/posts/search',
            data: {text: val},
            success: function(response){
                var html = '';
                $.each(response, function(index,data){
                   html =html + `<a class="dropdown-item"><b>${data.user.name}</b> posted<b> ${data.post_text} </b>on <i>${data.created_at}</i></a>`
                })
                $('#searchArea').html(html)
            }
        })
    }
})


//  Message js

function chatOpen(){
    $('body').on('click', '.chatOpen', function(e){
        e.preventDefault();
        alert('ok')
    })
}



 $.ajax({
     url: '/getContacts',
     type:'get',
     success : function(data){
          $.each(data, function(i,v){
              if(v.id !== user.id) {
                  var html = `<li data-id='${v.id}' class='chatOpen'>
                 <a href="#" >
                     <img src="dist/img/user-data/profile/${v.profile}" class="menu-pic img-responsive">`

                  if (v.is_online === '1') {
                      html = html + `<div class="show-online"></div>`
                  }

                  html = html + `</a> </li>`;
                  console.log(v)
                  $('#showChatUserList').append(html);
              }

        })
     }
 })





 $('body').on('click','.chatOpen a',function(e){
     e.preventDefault();
     var id = $(this).parent().data('id');
     getMessage(id)

 })

 function getMessage(id){

    $.ajax({
        type: 'get',
        url: '/getMessage/'+id,
        success: function(data){
           var html = `<div class="mini-messenger-container rounded-circle position-fixed">
           <div class="mini-messenger-content w-100 h-100 position-relative">
               <img src="./images/chatbubble.png" alt="" class="chat-bubble">
               <span class="plus-five">+5</span>
               <img src="./images/avtar1.png" alt="12" class="w-100 h-100">
               <div
                   class="mini-messenger-user d-flex align-items-center justify-content-center position-absolute p-2 font-weight-bold rounded-pill">
                   Andrew T.
               </div>
           </div>
           <div class="close-btn position-absolute">
               <i class="fas fa-plus-circle"></i>
           </div>
       </div>
       <div class="messenger-chat border show-messenger">
           <div class="messenger-header bg-white border-bottom d-flex align-items-center justify-content-between">
               <div class="user d-flex align-items-center p-2">
                   <img src="./dist/img/user-data/profile/${data.user.profile}" alt="avtar1">
                   <div class="ml-2">
                       <a href="#!" class="font-weight-bold text-dark">${data.user.name}</a>
                       <br>`
                       if(data.user.is_online == 1){
                            html = html + `<small>Active Now</small>`;
                       }else{
                        html = html + `<small>${data.user.last_seen}</small>`;
                       }
                 html = html +   `</div>
               </div>
               <div class="message-call-buttons">
                   <a href="#" class="d-inline-block icons"><i class="fas fa-video"></i></a>
                   <a href="#" class="d-inline-block icons ml-1"><i class="fas fa-phone-alt"></i></a>

                   <a href="#" class="d-inline-block icons close-messenger mx-2"><i class="fas fa-times"></i></a>
               </div>
           </div>
           <div class="messenger-body overflow-auto p-2">`

          $.each(data.message, function(i,v){

          if(v.from_id != user.id){
          html = html + `<div class="message-block d-flex align-items-center mb-2">
                   <img  width='50px' height='50px' src="./dist/img/user-data/profile/${v.user.profile}" alt="12">
                   <div class="message reply ml-2 p-2">
                      ${v.text}
                   </div>
               </div>`
          }else{
         html = html + `<div class="message-block d-flex align-items-center justify-content-end mb-2">
                   <div class="message text-white ans mr-2 p-2">
                      ${v.text}
                   </div>
                   <img width='50px' src="./dist/img/user-data/profile/${v.user.profile}" alt="12">
               </div>`
          }

           })


     html = html+ `</div>
           <div class="messenger-bottom border-top p-2 align-items-center">
               <a href="#"><i class="fas fa-plus-circle"></i></a>
               <a href="#"><i class="far fa-images"></i></a>
               <a href="#"><i class="fas fa-file-alt"></i></a>
               <div class="inline-div"><input class='sendMessageInput' id="textMessage-${id}" type="text" placeholder="Text Here.."><i class="far fa-smile"></i></div>
               <a href="#" data-id='${id}'  class='sendMessageButton'><i class="fas fa-play-circle"></i></a>
           </div>
       </div>`;

          $('.messenger-container').append(html);

        }
    })
 }


 $('body').on('click', '.sendMessageButton', function(e){
    e.preventDefault();
    var to_id = $(this).data('id');
    var text = $('#textMessage-'+to_id);
    if(text.length > 0){
    $.ajax({
        type:'post',
        url:'/sendMessage',
        data: {to_id: to_id, text: text.val()},
        success: function(){
            getMessage(to_id)
            text.val('')
        }
    })
   }
 })

 $('#plusIconAppend').on('click', '.plusChatButton', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getMessage(id)
    $('.contact-list-container').removeClass('show')
 })


 $.ajax({
     type: 'get',
     url: '/getAllMessage',
     success: function(data){
        let count = 0;
        $.each(data, function(i,v){
            var html = `
              <div  class="contact-list-items plusChatButton" data-id='${v.id}'>
                 <a href="" class=" d-flex align-items-center justify-content-between p-2 border-bottom">
                     <div class="user d-flex align-items-center">
                      <img src="./dist/img/user-data/profile/${v.profile}" alt="one" class="mr-2">
                      <div>
                     <h5 class="mb-0 text-dark">${v.name} <span class='text-primary ml-4' >(${v.unread})</span></h5>

                     <small class="online-status ${v.is_online ==1 ? 'active': ''}">${v.is_online ==1 ? 'online': 'offline'}</small>
                 </div>
             </div>
             <time>${v.last_seen}</time>
         </a>
        </div>
         `;
         $('#plusIconAppend').append(html)

         count += v.unread

        })
        $('#messageCount').text(count)
     }
 })






 $('body').on('click', '.close-messenger', function(){
    $('.messenger-container').empty();

 })




