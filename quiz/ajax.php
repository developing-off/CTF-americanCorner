<?php
if (isset($_POST["qn"])) {
  // (A) LOAD QUESTIONS & ANSWERS
  require "qna.php";

  // (B) FIRST QUESTION ONLY - ALSO RETURN TOTAL # OF QUESTIONS
  if ($_POST["qn"]==0) {
    $qn = $quiz[0];
    $qn["all"] = count($quiz);
    echo json_encode($qn);
  }

  // (C) OUTPUT QUESTION
  else { echo json_encode($quiz[$_POST["qn"]]); }
}