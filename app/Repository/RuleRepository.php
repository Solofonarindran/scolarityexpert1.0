<?php

    class RuleRepository extends AbstractRepository
    {
        public function __construct(Rule $rule)
        {
            $this->model=$rule;
            $this->relation=['professeurs'];
        }
    }