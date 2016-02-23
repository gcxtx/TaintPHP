<?php
// Class representing a node of the callgraph.

class CallGraphNode {

      // Representation of a function.
      private $FunctionNode = NULL;

      // Array of predecessors in the call graph.
      private $Predecessors[] = array();

      // Array of successors in the call graph.
      private $Successors[] = array();

      public function __construct($functionNode, $predecessors, $successors) {
      	     
	     $this->FunctionNode = $functionNode;
	     $this->Predecessors = $predecessors;
	     $this->Successors = $successors;
      }
}
?>