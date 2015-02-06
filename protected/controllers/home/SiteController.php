<?php

    class SiteController extends HomeController
    {
      public function actionIndex()
        {
            //Home page
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->pageTitle = 'HMR ';
            
        $team = team::model()->findAll(
                array(
                    'order' => 'name ASC',
                    
                )
                );
        
//        $em = employeeWork::model()->find();
        
            $this->render('home', array(
                'team'=>$team,
               
                
            ));
          
            }
             public function actionTeam($id)
             {
                 
                 $this->pageTitle ='about team';
                 $model = team::model()->findByPk($id);
                 $em = employeeWork::model()->findAll("team_id = {$id}");
            
                 
                 $this->render('team',array(
                     'model'=>$model,
                     'em'=>$em,
                     
                 ));
             }
                public function actionProject($id)
             {
                 
//                 $this->pageTitle ='about team';
                 $model = project::model()->findByPk($id);
                 $em = employeeProject::model()->findAll("project_id = {$id}");
                 
                 
                 $this->render('project',array(
                     'model'=>$model,
                     'em'=>$em,
                     
                 ));
             }
              public function actionTeams(){
                  $model = team::model()->findAll();
                  $this->render('teams', array('model'=>$model,));
                  
              }
              
                public function actionProjects(){
                  $model = project::model()->findAll();
                  $this->render('projects', array('model'=>$model,));
                }
                
         public function actionDetailEmployee($id)
        {
            $model               = employee::model()->findByPk($id);
            $this->pageTitle     = $model->name;
            $criteria            = new CDbCriteria();
//            $criteria->condition = 'status=1 AND categoryId=' . $model->categoryId . ' AND id>' . $model->id;
            $criteria->limit     = 8;
            $criteria->order     = 'id DESC';
            $items               = employee::model()->findAll($criteria);
//            $info                = Page::model()->findByUrl('thongtinmuahang');
//            $info                = isset($info) ? $info->content : '';
            
//            $project = project::model()->findAll('id =');
            $empro = employeeProject::model()->findAll("employee_id = {$id}");
            $emawa = employeeKtkl::model()->findAll("employee_id = {$id}");
           $emwork = employeeWork::model()->find("employee_id  = {$model->id}");
            $this->render('detailEmployee', array(
                'items' => $items,
                'model' => $model,
                'empro' =>$empro,
                 'emawa' =>$emawa,
               'emwork' =>$emwork,
//                'info'  => $info,
            ));
        }
        
//        public function employee($id)
//        {
//             $model               = employee::model()->findByPk($id);
//              $empro = employeeProject::model()->findAll("employee_id = {$id}");
//            $emawa = employeeKtkl::model()->findAll("employee_id = {$id}");
//            $this->render('employee', array(
//               
//                'model' => $model,
//                'empro' =>$empro,
//                 'emawa' =>$emawa,
////                'info'  => $info,
//            ));
//        }

//        public function actionRank1(){
//            
//            
//            
//            $this->pageTitle = 'Bảng Xếp Hạng';
//            
//            $championrank = team::model()->findAll(array(
//                
//                'condition' => 'idgiaidau = 1',
//                
//                'order' => 'diem DESC',
//                
//                
//            ));
//            $this->render('rank1', array(
//                'championrank' => $championrank,
//            ));
//            
//        }
//        public function actionRank2(){
//            
//            
//            
//            $this->pageTitle = 'Bảng Xếp Hạng FIFA';
//            
//            $championrank = team::model()->findAll(array(
//                
//                'condition' => 'idgiaidau = 2',
//                
//                'order' => 'diem DESC',
//                
//                
//            ));
//            $this->render('rank2', array(
//                'championrank' => $championrank,
//            ));
//            
//        }
//           public function actionHomeTeam()
//        {
//            //Home page
//            // renders the view file 'protected/views/site/index.php'
//            // using the default layout 'protected/views/layouts/main.php'
//            $this->pageTitle = 'Football ';
//            $championleague         = team::model()->findAll(array(
//             'condition' => ' idgiaidau = 1 OR idgiaidau =3',
////                'order'     => 'dateCreated DESC, rank DESC',
//                'limit'     => 8,
//            ));
//           $fifacup        = team::model()->findAll(array(
//               'condition' => 'idgiaidau = 2 OR idgiaidau =3',
////                'order'     => 'rank DESC',
//                'limit'     => 8,
//            ));
//            $this->render('hometeam', array(
//                'championleague' => $championleague,
//               'fifacup' => $fifacup,
//            ));
//        }
////        
////         public function actionIndex()
////        {
////            //Home page
////            // renders the view file 'protected/views/site/index.php'
////            // using the default layout 'protected/views/layouts/main.php'
////            $this->pageTitle = 'Football ';
////            $championleaguenews         = news::model()->findAll(array(
////             'condition' => ' idgiaidau = 1',
//////                'order'     => 'dateCreated DESC, rank DESC',
////                'limit'     => 8,
////            ));
////           $fifacupnews        = news::model()->findAll(array(
////               'condition' => 'idgiaidau = 2',
//////                'order'     => 'rank DESC',
////                'limit'     => 8,
////            ));
////            $this->render('homenews', array(
////                'championleaguenews' => $championleaguenews,
////               'fifacupnews' => $fifacupnews,
////            ));
////        }
//   public function actionIndex()
//        {
//            //Home page
//            // renders the view file 'protected/views/site/index.php'
//            // using the default layout 'protected/views/layouts/main.php'
//            $this->pageTitle = 'Football ';
//            $championleaguenews         = news::model()->findAll(array(
//             'condition' => ' idgiaidau = 1',
////                'order'     => 'dateCreated DESC, rank DESC',
//                'limit'     => 8,
//            ));
//           $fifacupnews        = news::model()->findAll(array(
//               'condition' => 'idgiaidau = 2',
////                'order'     => 'rank DESC',
//                'limit'     => 8,
//            ));
//            $this->render('homenews', array(
//                'championleaguenews' => $championleaguenews,
//               'fifacupnews' => $fifacupnews,
//            ));
//            
//        }
//        
//        public function actionNews1()
//        {
//            
//            
//            $this->pageTitle = 'Tin Tức Championleague';
//            $championleaguenews = news::model()->findAll(array(
//                'condition' => 'idgiaidau = 1',
//                'limit'=> 8,
//                
//            ));
//            $this->render('news1',array(
//                'championleaguenews'=>$championleaguenews
//            ));
//        }
//         public function actionNews2()
//        {
//            
//            
//            $this->pageTitle = 'Tin Tức FIFA CUP';
//            $cupnews = news::model()->findAll(array(
//                'condition' => 'idgiaidau = 2',
//                'limit'=> 8,
//                
//            ));
//            $this->render('news2',array(
//                'cupnews'=>$cupnews
//            ));
//        }
//            public function actionTeam1()
//        {
//            
//            
//            $this->pageTitle = 'Các Đội Bóng tham dự';
//            $championleague = team::model()->findAll(array(
//                'condition' => 'idgiaidau = 1',
//                'limit'=> 8,
//                
//            ));
//            $this->render('team1',array(
//                'championleague'=>$championleague
//            ));
//        }
//             public function actionTeam2()
//        {
//            
//            
//            $this->pageTitle = 'Các Đội Bóng tham dự';
//            $championleague = team::model()->findAll(array(
//                'condition' => 'idgiaidau = 2',
//                'limit'=> 8,
//                
//            ));
//            $this->render('team1',array(
//                'championleague'=>$championleague
//            ));
//        }
        public function actionSearch()
        {
            $key             = isset($_REQUEST['v']) ? $_REQUEST['v'] : '';
            $this->pageTitle = 'Tim kiem: ' . $key;
            if (!empty($key)) {
                $criteria            = new CDbCriteria();
                $criteria->condition = 'status=1 AND id="' . $key . '"';
                $criteria->order     = 'rank DESC,id DESC';

                $count = Product::model()->count($criteria);
                $pages = new CPagination($count);
                //results per page
                $pages->pageSize = 16;
                $pages->applyLimit($criteria);
                $items = Product::model()->findAll($criteria);

                $this->render('search', array(
                    'items'    => $items,
                    'pages'    => $pages,
                ));
            } else {
                throw new CHttpException(400, 'Ban phai nhap tu khoa tim kiem');
            }
        }

     
//        
//
////        public function actionDetail($id)
////        {
////            $model               = Product::model()->findByPk($id);
////            $this->pageTitle     = $model->name;
////            $criteria            = new CDbCriteria();
////            $criteria->condition = 'status=1 AND categoryId=' . $model->categoryId . ' AND id>' . $model->id;
////            $criteria->limit     = 8;
////            $criteria->order     = 'id DESC';
////            $items               = Product::model()->findAll($criteria);
////            $info                = Page::model()->findByUrl('thongtinmuahang');
////            $info                = isset($info) ? $info->content : '';
////            $this->render('detail', array(
////                'items' => $items,
////                'model' => $model,
////                'info'  => $info,
////            ));
////        }
//           public function actionDetailTeam($id)
//        {
//            $model               = team::model()->findByPk($id);
//            $this->pageTitle     = $model->ten;
//            $criteria            = new CDbCriteria();
////            $criteria->condition = 'status=1 AND categoryId=' . $model->categoryId . ' AND id>' . $model->id;
//            $criteria->limit     = 8;
//            $criteria->order     = 'id DESC';
//            $items               = team::model()->findAll($criteria);
////            $info                = Page::model()->findByUrl('thongtinmuahang');
////            $info                = isset($info) ? $info->content : '';
//            $this->render('detailTeam', array(
//                'items' => $items,
//                'model' => $model,
////                'info'  => $info,
//            ));
//        }
//   public function actionDetailNews($id)
//        {
//            $model               = news::model()->findByPk($id);
//            $this->pageTitle     = $model->titles;
//            $criteria            = new CDbCriteria();
////            $criteria->condition = 'status=1 AND categoryId=' . $model->categoryId . ' AND id>' . $model->id;
//            $criteria->limit     = 8;
//            $criteria->order     = 'id DESC';
//            $items               = news::model()->findAll($criteria);
////            $info                = Page::model()->findByUrl('thongtinmuahang');
////            $info                = isset($info) ? $info->content : '';
//            $this->render('detailnews', array(
//                'items' => $items,
//                'model' => $model,
////                'info'  => $info,
//            ));
//        }
        public function actionPage()
        {
            if (empty($_GET['view']))
                $this->actionIndex();
            $model = Page::model()->findByUrl($_GET['view']);
// if page is not found, then run a controller with that name
            if ($model === NULL)
                throw new CHttpException(400, 'Khong tim thay trang');
            else {
                $this->pageTitle = $model->title;
                $this->render('page', array('model' => $model));
            }
        }

        /**
         * This is the action to handle external exceptions.
         */
        public function actionError()
        {
            if ($error = Yii::app()->errorHandler->error) {
                if (Yii::app()->request->isAjaxRequest)
                    echo $error['message'];
                else
                    $this->render('error', $error);
            }
        }

    }