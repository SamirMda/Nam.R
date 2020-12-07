<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* Manege the interaction with the API 
	*/
	class Data extends CI_Model{
		public function getList(){
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => "http://localhost:8080/list",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			));

			$response = curl_exec($curl);

			curl_close($curl);

			return $response;
		}

		public function getArticleById($id){
			$res = $this->db->query("SELECT * FROM `articles` WHERE `Id`=$id");

			$articles = array();
			$i = 0;

			foreach ($res->result() as $value) {
				$articles['id'] = $value->Id;
				$articles['article'] = $value->Article;
				$articles['title'] = $value->Title;
				$articles['cover'] = $value->Cover;
				$articles['resume'] = $value->Resume;
				$articles['date'] = implode('/', array_reverse(explode('-', $value->Date)));
				$i++;
			}

			$res->free_result();

			return $articles;
		}
	}
?>