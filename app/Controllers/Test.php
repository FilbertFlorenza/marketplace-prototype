<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        return view('test');
    }

    public function process_test()
    {
        $correct_answer_grammar = [2,1,4,1,1,4,1,4,3];
        $correct_answer_vocabulary = [1,2,4,1,4,2,4,4];
        $correct_answer_editing = [3,1,2,1,2];
        $correct_answer_synthesis = [2,1,3];
        $correct_answer_grammar_cloze = [2,1,3,2,4];
        $correct_submitted_grammar = array();
        $correct_submitted_vocabulary = array();
        $correct_submitted_editing = array();
        $correct_submitted_synthesis = array();
        $correct_submitted_grammar_cloze = array();

        //Check Grammar MCQ Answers
        $j=0;
        for($i = 1 ; $i <= 9 ; $i++){
            $answer_grammar=$this->request->getPost('answer-'.$i);
            if($correct_answer_grammar[$j] == $answer_grammar){
                array_push($correct_submitted_grammar,$i);
            }
            $j++;
        }

        // Check Vocabulary MCQ Answers
        $j=0;
        for($i = 10 ; $i <= 17; $i++){
            $answer_vocabulary=$this->request->getPost('answer-'.$i);
            if($correct_answer_vocabulary[$j] == $answer_vocabulary){
                array_push($correct_submitted_vocabulary,$i);
            }
            $j++;
        }

        // Check Editing MCQ Answers
        $j=0;
        for($i = 18 ; $i <= 22 ; $i++){
            $answer_editing=$this->request->getPost('answer-'.$i);
            if($correct_answer_editing[$j] == $answer_editing){
                array_push($correct_submitted_editing,$i);
            }
            $j++;
        }

        // Check Synthesis MCQ Answers
        $j=0;
        for($i = 23 ; $i <= 25 ; $i++){
            $answer_synthesis=$this->request->getPost('answer-'.$i);
            if($correct_answer_synthesis[$j] == $answer_synthesis){
                array_push($correct_submitted_synthesis,$i);
            }
            $j++;
        }

        // Check Grammar Cloze MCQ Answers
        $j=0;
        for($i = 26 ; $i <= 30 ; $i++){
            $answer_grammar_cloze=$this->request->getPost('answer-'.$i);
            if($correct_answer_grammar_cloze[$j] == $answer_grammar_cloze){
                array_push($correct_submitted_grammar_cloze,$i);
            }
            $j++;
        }

        //Pass variables to view
        $data['correct_submitted_grammar'] = $correct_submitted_grammar;
        $data['correct_submitted_vocabulary'] = $correct_submitted_vocabulary;
        $data['correct_submitted_editing'] = $correct_submitted_editing;
        $data['correct_submitted_synthesis'] = $correct_submitted_synthesis;
        $data['correct_submitted_grammar_cloze'] = $correct_submitted_grammar_cloze;

        return view('test_result', $data);
    }
}
