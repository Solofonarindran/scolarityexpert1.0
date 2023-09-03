<?php

    class RuleRepository extends AbstractRepository
    {
        public function __construct(Activity $activity)
        {
            $this->model=$activity;
            $this->relation=['professeur'];
        }
    }