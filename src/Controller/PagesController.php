<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
class PagesController extends AbstractController
{
    /**
     * @Route("/", name="website_home", host="{site_name}.160.ma")
     */
    public function index(Request $request,ParameterBagInterface $params): Response
    {
        $filesystem = new Filesystem();
        $site_name=$request->get('site_name');
        $views_path = $params->get('app.views_directory').'pages/sites/';
        if($filesystem->exists($views_path.$site_name) == true){
                return $this->render("pages/sites/$site_name/index.html.twig");
        }else{ 
                return $this->render("pages/404.html.php");
            
            
        }
    }
     /**
     * @Route("/editor/page={page}", name="editor_page", host="{site_name}.160.ma")
     */
    public function editor(Request $request, ParameterBagInterface $params): Response
    {
        $views_path = $params->get('app.views_directory').'pages/sites/';
        $site_name=$request->get('site_name');
        $page = $request->get('page');
        $title_page = $page;
        if($page == 'index'){
            $page = '';
            $title_page = 'index';
        }
        return $this->render("pages/editor.html.php", [ 
            'page' => $page,
            'title_page' => $title_page,
            'company_name' => $site_name,
            'template_path' => 'http://'.$site_name.'.160.ma/'.$page
        ]);
    }
    /**
     * @Route("/editor/save/{page}", name="save_page", host="{site_name}.160.ma")
     */
    public function savePage(Request $request, ParameterBagInterface $params): Response
    {
        $filesystem = new Filesystem();
        $site_name=$request->get('site_name');
        $views_path = $params->get('app.views_directory').'pages/sites/';
        $page=$request->get('page');
        $data = $request->getContent();
        $template = json_decode($data, true);
        $template = base64_decode($template['template']);
        if($filesystem->exists($views_path.$site_name) == true){
            try {
                $filesystem->dumpFile($views_path.$site_name.'/'.$page.'.html.twig', $template);
            }catch (IOExceptionInterface $exception) {
                var_dump($exception->getPath());
            
            }
        }
        return $this->json(['code'=>200,'message' => 'ok great'],200);
    }
    /**
     * @Route("/{page}", name="site_name", host="{site_name}.160.ma")
     */
    public function company(Request $request, ParameterBagInterface $params): Response
    {
    
        $site_name=$request->get('site_name');
        $page=$request->get('page');
        $not_allowed = $params->get('app.not_allowed');
        $views_path = $params->get('app.views_directory').'pages/sites/';
        
        if($page == "editor"){
            $filesystem = new Filesystem();
                if (!in_array($site_name, $not_allowed)) {
                    if($filesystem->exists($views_path.$site_name) != true){
                        try {
                                $filesystem->mkdir($views_path.$site_name);
                                $filesystem->dumpFile($views_path.$site_name.'/index.html.twig', "<h3>$site_name</h3>");
                            } catch (IOExceptionInterface $exception) {
                                var_dump($exception->getPath());
                            
                            }
                    }
                return $this->render("pages/$page.html.php", [

                        'company_name' => $site_name
                    ]);
                }else{
                    return $this->render("pages/404.html.php");
                }  
        }else{
            return $this->render("pages/sites/$site_name/$page.html.twig");
        }
                
        
            
    }
    /**
     * @Route("/editor/demos/{template}", name="demo_name", host="{company_name}.160.ma")
     */
    public function demos(Request $request): Response
    {
        
        $template=$request->get('template');
        return $this->render("editor/demos/$template/index.html.twig");
    }
    
    
}
