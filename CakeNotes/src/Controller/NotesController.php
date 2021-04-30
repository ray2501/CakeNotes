<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\ORM\TableRegistry;
   use Cake\Datasource\ConnectionManager;
   use Cake\Auth\DefaultPasswordHasher;

   class NotesController extends AppController{

      public function index(){
         $notes = $this->getTableLocator()->get('Notes');
         $query = $notes->find();
         $this->set('results',$query);
      }

      public function add(){
         if($this->request->is('post')){
            $title = $this->request->getData('title');
            $body = $this->request->getData('body');
            $notes_table = $this->getTableLocator()->get('Notes');
            $notes = $notes_table->newEntity($this->request->getData());
            $notes->title = $title;
            $notes->body = $body;
            $notes->created = 'now()';

            if($notes_table->save($notes)) {
	        echo "User is added.";
	    }

            return $this->redirect(
            	['controller' => 'Notes', 'action' => 'index']
            );
         }
      }

      public function edit($id){
         if($this->request->is('post')){
            $title = $this->request->getData('title');
            $body = $this->request->getData('body');
            $notes_table = $this->getTableLocator()->get('Notes');
            $notes = $notes_table->get($id);
            $notes->title = $title;
            $notes->body = $body;

            if($notes_table->save($notes)) {
                echo "User is udpated";
	    }

            return $this->redirect(
            	['controller' => 'Notes', 'action' => 'index']
            );
         } else {
            $notes_table = $this->getTableLocator()->get('Notes')->find();
            $notes = $notes_table->where(['id'=>$id])->first();
            $this->set('title',$notes->title);
            $this->set('body',$notes->body);
            $this->set('id',$id);
         }
      }

      public function delete($id){
         $notes_table = $this->getTableLocator()->get('Notes');
         $notes = $notes_table->get($id);
         $notes_table->delete($notes);
         echo "User deleted successfully.";

         return $this->redirect(
           ['controller' => 'Notes', 'action' => 'index']
         );
      }

   }
?>
