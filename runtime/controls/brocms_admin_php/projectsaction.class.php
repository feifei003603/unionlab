<?php
    /**
     * 
     * 项目展示的后台控制器
     * date 2012/7/14
     * author Griffin
     * 
     */
    class ProjectsAction extends Common {
        
        function index(){
            
            $this->display();
            
        }
        function add(){
            
            $projects = D("projects");
            $this->mess('提示：带<span class="red_font">*</span>的项目为必填项目');
            $this->display();
        }
        /**
         * 描述：首先将项目，以及项目图片上传至服务器uploads
         *      然后再将projectsbean插入到数据库中。
         * date：2012/07/24
         * author: Griffin
         */        
        function insert(){
            $values = $_POST;
            $projects = D("projects");
            $imgUp = new FileUpload();
            $proUp = new FileUpload();
            $imgName;
            $proName;
            if($imgUp->upload("pic")){
                $imgName = $imgUp->getFileName();
                
                
            }else
            {
                $this->mess($imgUp->getErrorMsg(),true); 
            }
           if($proUp->upload("projects")){
//			die(var_dump($up));
				$proName=$proUp->getFileName();
			
//				$this->redirect("index", "pid/{$_POST["pid"]}");
			}else
                        {
                           $this->mess($proUp->getErrorMsg(),true); 
                        }
           
           $nameArr = array("proImgUrl"=>$imgName[0],"proUrl"=>$proName[0]);
           $insertValues = array_merge_recursive($values,$nameArr);
           //向数据库插入相关信息
           $sqlresult = $projects->insert($insertValues,1,1);
           if($sqlresult)
           {
               $this->display("add");
               $this->mess('项目添加成功!!!',true); 
           }

        }
    }

?>
