<?php
declare (strict_types = 1);

namespace app\command;

use Kaadon\Captcha;
use Kaadon\Graphical;
use think\console\Command;
use think\console\Input;
use think\console\input\Argument;
use think\console\input\Option;
use think\console\Output;
use think\facade\Cache;

class testImages extends Command
{
    protected function configure()
    {
        // 指令配置
        $this->setName('testimages')
            ->setDescription('the app\command\testimages command');
    }

    protected function execute(Input $input, Output $output)
    {
        $this->rotateImages();
        // 指令输出
        $output->writeln('app\command\testimages');
    }

    public function rotateImages()
    {
//        $images = json_decode(file_get_contents(root_path()."extend/graphical/src/assets/default.json"),true);
//        $num = 0;
//        foreach ($images as $key => $image) {
//            $num++;
//            $rand = rand(45,315);
//            $Graphical = Graphical::open("/Volumes/SourceData/composer/composer_dev/extend/graphical/src/assets/default/".$image);
//            $Graphical->rotate($rand)
//                ->thumb(100,100)
//                ->save("/Volumes/SourceData/composer/composer_dev/extend/graphical/src/assets/images/{$num}.{$Graphical->type()}");
//            }
        try {
//            $data = (new Captcha())->create();
//            var_dump($data['verify_id']);
            (new Captcha())->check("6cf20c131f88ddbcb6bb59b1562a85b0",["497e9b00238682ec12f7af348cd24e66","4aeb50610a48beccb5c699cbc46a5b0d"]);
        } catch (\Exception $exception) {
            var_dump($exception->getMessage());
            var_dump($exception->getLine());
            var_dump($exception->getFile());
        }
    }


}
