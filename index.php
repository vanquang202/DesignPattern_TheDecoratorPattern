<?php 

interface IBook{
    public function buck();
}

class Doraemon implements IBook{
    
    private $pattenName = "Doraemon";
    
    public function buck()
    {
        
        return $this->pattenName;
    }
}

class Nobita implements IBook{
    
    private $pattenName = "Nobita";

    public function __construct(public IBook $book)
    {}
    public function buck()
    {
        
          return $this->book->buck() . ' and '  . $this->pattenName;
    }
}

class Xuka {
    
    private $pattenName = "Xuka";
    public function __construct(public IBook $book)
    {}
    
    public function buck()
    {
        
        return $this->book->buck() . ' and '  . $this->pattenName;
    }
}

echo (new Xuka(new Nobita(new Doraemon())))->buck();
// step 1 Nobita and Doraemon
// step 2 Nobita and Doraemon and Xuka