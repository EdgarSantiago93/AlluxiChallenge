<?php

namespace Kata\CategoryTree;

class Category
{

    // private int $id;
    // private string $name;
    // private array $children =[];

    // public function __construct($id, $name, $children)
    // {
    // }



    public function __construct(private int $id, private string $name, private array $children = [])
    {
    }


    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function children(): array
    {
        return $this->children;
    }

    public function addChild(Category $child): self
    {
        $this->children[] = $child;
        return $this;
    }

    public function hasChildren()
    {
        if (sizeof($this->children>0)) {
            return true;
        }
        return false;
    }


    public function toArray()
    {
        $array=array();
        $array['id']=$this->id;
        $array['name']=$this->name;
        $array['children']=$this->children;
        return $array;
    }
}
