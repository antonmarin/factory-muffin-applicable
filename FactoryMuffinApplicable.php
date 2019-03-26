<?php

namespace antonmarin\factory-muffin-applicable;

interface FactoryMuffinApplicable
{
    /**
     * @return string Value of primary key of record
     */
    public function pk(): string;
    
    /**
     * @return string All record errors
     */
    public function getValidationErrors(): string;
}
