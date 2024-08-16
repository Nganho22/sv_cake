<?php
declare(strict_types=1);



namespace App\Controller;

/**
 * Sinhvien Controller
 *
 * @property \App\Model\Table\SinhvienTable $Sinhvien
 */

 use App\Controller\AppController;
use Cake\Log\Log; // Thêm dòng này để import lớp Log
use Cake\Http\Exception\NotFoundException;
class SinhvienController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
            $query = $this->Sinhvien->find();
    
            $search = $this->request->getQuery('search');
            if (!empty($search)) {
                $query->where([
                    'OR' => [
                        'CAST(Sinhvien.MSSV AS CHAR) LIKE' => '%' . $search . '%',
                        'Sinhvien.HoTen LIKE' => '%' . $search . '%',
                        'Sinhvien.DiaChi LIKE' => '%' . $search . '%'
                    ]
                ]);
            }
    
            $sinhvien = $this->paginate($query);
            $this->set(compact('sinhvien'));
    }
    
    

    /**
     * View method
     *
     * @param string|null $id Sinhvien id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sinhvien = $this->Sinhvien->get($id, contain: []);
        $this->set(compact('sinhvien'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sinhvien = $this->Sinhvien->newEmptyEntity();
        if ($this->request->is('post')) {
            $sinhvien = $this->Sinhvien->patchEntity($sinhvien, $this->request->getData());
            if ($this->Sinhvien->save($sinhvien)) {
                $this->Flash->success(__('The sinhvien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sinhvien could not be saved. Please, try again.'));
        }
        $this->set(compact('sinhvien'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sinhvien id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sinhvien = $this->Sinhvien->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sinhvien = $this->Sinhvien->patchEntity($sinhvien, $this->request->getData());
            if ($this->Sinhvien->save($sinhvien)) {
                $this->Flash->success(__('The sinhvien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sinhvien could not be saved. Please, try again.'));
        }
        $this->set(compact('sinhvien'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sinhvien id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sinhvien = $this->Sinhvien->get($id);
        if ($this->Sinhvien->delete($sinhvien)) {
            $this->Flash->success(__('The sinhvien has been deleted.'));
        } else {
            $this->Flash->error(__('The sinhvien could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
