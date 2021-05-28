<?php

namespace Kata\CategoryTree;

class Printer
{
    public $categories = [];
    public static $finalString ='';

    public function sortChildren($children)
    {
        usort($children, fn ($a, $b) =>$a->name() <=> $b->name());
        return $children;
    }

    public function iterate($parent, $spaces, $ft=false)
    {
        if ($ft) {
            self::$finalString.=str_repeat("", $spaces).$parent->name()."\n";
            $parent  = $this->sortChildren($parent->children());
        }
        $spaces +=2;
        if (is_array($parent)) {
            foreach ($parent as $key=>$child) {
                $spaces>0? $spaces-=2 :null;
                self::$finalString.=str_repeat(" ", $spaces).$child->name()."\n";
                $spaces +=2;
                if (sizeof($child->children())>0) {
                    $sorted = $this->sortChildren($child->children());
                    $this->iterate($sorted, $spaces, false);
                }
            }
        } else {
            foreach ($parent->children() as $key=>$c) {
                $spaces>0? $spaces-=2:null;
                self::$finalString.=str_repeat(" ", $spaces).$c->name()."\n";
                $spaces +=2;
                $sorted = $this->sortChildren($c->children());
                $this->iterate($sorted, $spaces, false);
            }
        }
    }

    public function build(Category $parent, int $spaces = 0): string
    {
        $this->iterate($parent, 2, true);
        return self::$finalString;
    }
}
