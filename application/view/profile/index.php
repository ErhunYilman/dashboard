      <!-- echo out the system feedback (error and success messages) -->
      <?php $this->renderFeedbackMessages(); ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Profiel</h4>
                <p class="category">Here you can see all user in the system</p>
            </div>
            <div class="card-content table-responsive">
              <table class="overview-table table">
                  <thead class="text-primary">
                  <tr>
                      <td>Id</td>
                      <td>Avatar</td>
                      <td>Username</td>
                      <td>User's email</td>
                      <td>Activated ?</td>
                      <td>Link to user's profile</td>
                  </tr>
                  </thead>
                  <?php foreach ($this->users as $user) { ?>
                      <tr class="<?= ($user->user_active == 0 ? 'inactive' : 'active'); ?>">
                          <td><?= $user->user_id; ?></td>
                          <td class="avatar">
                              <?php if (isset($user->user_avatar_link)) { ?>
                                  <img src="<?= $user->user_avatar_link; ?>" />
                              <?php } ?>
                          </td>
                          <td><?= $user->user_name; ?></td>
                          <td><?= $user->user_email; ?></td>
                          <td><?= ($user->user_active == 0 ? 'No' : 'Yes'); ?></td>
                          <td>
                              <a href="<?= Config::get('URL') . 'profile/showProfile/' . $user->user_id; ?>">Profile</a>
                          </td>
                      </tr>
                  <?php } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
</main>
