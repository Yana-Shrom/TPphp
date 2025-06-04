<?php
namespace Agency\Interface;

interface Billable {
    public function calculateCost(): float;
}
