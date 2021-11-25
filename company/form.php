<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo  isset($company['name']) ? $company['name'] : '' ?>">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo  isset($company['email']) ? $company['email'] : '' ?>">
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo  isset($company['phone']) ? $company['phone'] : '' ?>">
</div>
<div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php echo  isset($company['address']) ? $company['address'] : '' ?>">
</div>
<div class="mb-3">
    <label for="websitelink" class="form-label">Website Link</label>
    <input type="text" class="form-control" id="websitelink" name="website" value="<?php echo  isset($company['website']) ? $company['website'] : '' ?>">
</div>