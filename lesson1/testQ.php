<?php

class Test extends SplQueue{
   
}
    $queue = new Test();
    
    $queue->setIteratorMode(SplQueue::IT_MODE_DELETE);
    
    $queue->enqueue('one');
    $queue->enqueue('two');
    $queue->enqueue('qwerty');
    
    echo $queue->dequeue();
    echo $queue->dequeue();
    
    echo $queue->top(); // qwerty
    