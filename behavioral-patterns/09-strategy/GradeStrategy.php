<?php
interface GradeStrategy { public function calculate(array $grades, array $weights = []): float; }
