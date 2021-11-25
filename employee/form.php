<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($employee['name']) ? $employee['name'] : '' ?>">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($employee['email']) ? $employee['email'] : '' ?>">
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo isset($employee['phone']) ? $employee['phone'] : '' ?>">
</div>
<div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php echo isset($employee['address']) ? $employee['address'] : '' ?>">
</div>
<div class="mb-3">
    <label for="websitelink" class="form-label">Company</label>
    <select name="company_id" id="company" class="form-select">
        <?php
        $companies = Company::all();
        foreach ($companies as $company) {
            if ($company['id'] == $employee['company_id'])
                echo '<option value="' . $company['id'] . '" selected >' . $company['name'] . '</option>';
            else
                echo '<option value="' . $company['id'] . '" >' . $company['name'] . '</option>';
        }
        ?>
    </select>
</div>