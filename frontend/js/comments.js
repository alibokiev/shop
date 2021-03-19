
function addComment(user, comment){
    let html =$(`
            <div class="reviews">
                <img src="${user.avatar}" alt="">
                <div>
                    <h3>${user.name}  <span>June 7.2016</span></h3>
                    <p>
                        ${comment}
                    </p>
                </div>
            </div>
        `);
         $(".pd_container .reviews_c").append(html);
}

jQuery(document).ready(function($){

    $.ajax({
        type: 'GET',
        url: `/?model=comments&action=index&product_id=${parseInt($("input[name=product_id]").val())}`,
        dataType: 'json',
        success: function (comments){
            console.log(comments)
            
            for (let index in comments){
                let comment = comments[index];
                
                let user = {
                    name: comment.username,
                    avatar: comment.avatar
                }
                
                addComment(user, comment.comment);
            }
        },
        error: function (data){
            console.error(data)
        }
    });
{
    // const comments = [
    //     {
    //         userInfo:{
    //             avatar: '/images/rev_avatar.png', 
    //             name: 'Username1',
    //         },
    //         review: 'You only get the picture, not the person holding it, something they don’t mention in the description.',
    //     },
    //     {
    //         userInfo:{
    //             avatar: '/images/rev_avatar.png', 
    //             name: 'Username2',
    //         },
    //         review: 'You only get the picture.',
    //     },
    // ];
}

  

    $(".review_form").submit(function(event) {
        event.stopPropagation();

        const _self = $(this);
        let user = {
            name: $(this).find('input[name=name]').val(),
            email: $(this).find('input[name=email]').val(),
            avatar: '/images/rev_avatar.png'
        }
        
        let productId =  $(this).find('input[name=product_id]').val();
        let comment =  $(this).find('textarea[name=review]').val();
            
        let review = {
            product_id: productId,
            name: user.name,
            email: user.email,
            avatar: user.avatar,
            text: comment
        };

        $.ajax({
            type: 'POST',
            url: '/?model=comments&action=create',
            data: review,
            dataType: 'json',
            success: function (response){
               if(response && response.result === 'OK'){
                    
                    addComment(user,comment);
            
                    _self.find('input[name=name]').val('');
                    _self.find('textarea[name=review]').val('');
                    _self.find('input[name=email]').val('');
               }
            },
            error: function (response){
                console.error(response)
            }
        });

        return false;
    });
    
});