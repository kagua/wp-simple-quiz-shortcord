<?php
/*
Plugin Name: シンプルクイズショートコード
Description: ショートコードで、選択式のクイズを作成する事が出来ます。
Version: 1.0
*/

function wp_make_quiz_lib(){
  if(!is_admin()){
    wp_enqueue_style('wp_make_quiz', plugins_url('style.css', __FILE__));
    wp_enqueue_script('wp_make_quiz', plugins_url('script.js', __FILE__), array(), false, true);
  }
}
add_action('wp_enqueue_scripts', 'wp_make_quiz_lib');

function wp_make_quiz_show_text($atts, $title = null){
  if(!isset($atts['question']) || !isset($atts['answer']) || $title == null){
    return null;
  }

  //質問一覧
  $question_list = explode(',', $atts['question']);

  //質問一覧をシャッフル
  if(isset($atts['random']) && $atts['random'] == 'true'){
    shuffle($question_list);
  }
  if(!count($question_list)){
    return null;
  }

  $answer = $atts['answer'];

  //HTML生成
  $html = '<div class="wp-make-quiz-wrapper">';
  $html .= '<p class="wp-make-quiz-title">'.$title.'</p>';

  $html .= '<ul class="wp-make-quiz-question">';
  foreach ($question_list as $question){
    if($question == $answer){
      $html .= '<li class="correct">'.$question.'<img src="'.plugins_url('img/icon_correct.png', __FILE__).'"></li>';
    }else{
      $html .= '<li>'.$question.'<img src="'.plugins_url('img/icon_incorrect.png', __FILE__).'"></li>';
    }
  }
  $html .= '</ul>';

  $html .= '<div class="wp-make-quiz-answer">';
  $html .= '<p class="wp-make-quiz-result correct"><img src="'.plugins_url('img/icon_circle_correct.png', __FILE__).'" alt="正解！"><span>正解！</span></p>';
  $html .= '<p class="wp-make-quiz-result incorrect"><img src="'.plugins_url('img/icon_circle_incorrect.png', __FILE__).'" alt="不正解！"><span>不正解！</span></p>';
  $html .= '<p class="wp-make-quiz-right">'.$answer.'</p>';

  if(isset($atts['kaisetsu']) && $atts['kaisetsu'] !=''){
    $html .= '<p class="wp-make-quiz-kaisetsu">'.$atts['kaisetsu'].'</p>';
  }

  $html .= '</div>';
  $html .= '</div>';

  return $html;
}
add_shortcode('quiz', 'wp_make_quiz_show_text');