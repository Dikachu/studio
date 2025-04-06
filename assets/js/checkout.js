// Payment methods selection
document.querySelectorAll('.payment-method').forEach(method => {
    method.addEventListener('click', function() {
      document.querySelectorAll('.payment-method').forEach(m => {
        m.classList.remove('selected');
      });
      this.classList.add('selected');
    });
  });
  
  // Add smooth micro-interactions
  document.querySelectorAll('input, select').forEach(input => {
    input.addEventListener('focus', function() {
      this.parentElement.style.transition = 'all 0.3s ease';
      this.parentElement.style.transform = 'translateY(-2px)';
    });
    
    input.addEventListener('blur', function() {
      this.parentElement.style.transform = 'translateY(0)';
    });
  });
  
  // Interactive button effects
  document.querySelectorAll('.btn').forEach(button => {
    button.addEventListener('mousedown', function() {
      this.style.transform = 'scale(0.97)';
    });
    
    button.addEventListener('mouseup', function() {
      this.style.transform = 'scale(1)';
    });
  });