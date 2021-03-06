<?php
// Class representing a node of the callgraph.

class CallGraphNode {

      // Representation of a function.
      private $FunctionRepresentation = NULL;

      // Array of predecessors in the call graph.
      private $Predecessors;

      // Array of successors in the call graph.
      private $Successors;

      public function __construct($functionRepresentation, $predecessors = array(), $successors = array()) {
      	     
	     $this->FunctionRepresentation = $functionRepresentation;
	     $this->Predecessors = $predecessors;
	     $this->Successors = $successors;
      }

      public function getFunctionRepresentation() {
      	     return $this->FunctionRepresentation;
      }

      public function addPredecessor($callGraphNode) {
      	     $this->Predecessors[] = $callGraphNode;
      }

      public function getPredecessors() {
      	     return $this->Predecessors;
      }

      public function isRoot() {
             return count($this->Predecessors) == 0;
      }

      public function isLeaf() {
             return count($this->Successors) == 0;
      }

      public function addSuccessor($callGraphNode) {
      	     $this->Successors[] = $callGraphNode;
      }

      public function getSucessors() {
      	     return $this->Successors;
      }

      public function printCallGraphNode() {
      	     print "[" . $this->getFunctionRepresentation()->printFunctionSignature() . "]\n";
	     print "[Num. Successors]: " . count($this->Successors)  . "\n";
	     print "[Successors]:\n";
	     foreach($this->Successors as $successor) {
	     	print $successor->getFunctionRepresentation()->printFunctionSignature() . "\n";
	     }
	     print "[Num. Predecessors]: " . count($this->Predecessors)  . "\n";
	     print "[Predecessors]:\n";
	     foreach($this->Predecessors as $predecessor) {
	     	print $predecessor->getFunctionRepresentation()->printFunctionSignature() . "\n";
	     }
      }
}
?>