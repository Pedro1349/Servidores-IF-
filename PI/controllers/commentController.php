<?php
class commentController{

       public static function store(){
            $comment = new Comment(connection());
            $comment->save($_POST['comment'],Auth::userId());
            return Direction::redirect('/dash');
       } 
       
}
