package ceis400equipmentLog;

import java.awt.BorderLayout;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JTabbedPane;
import javax.swing.JLabel;
import java.awt.FlowLayout;
import java.awt.GridLayout;
import javax.swing.JTextField;
import javax.swing.JRadioButton;
import javax.swing.JButton;

public class DBConnect extends JFrame {

	private JPanel contentPane;
	private JTextField empIDtextField;
	private JTextField dateTextField;
	private JTextField empNameTextField;
	private JTextField textField_1;
	private JTextField equipmentDescriptTextField;
	private JTextField textField;
	private JTextField textField_2;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					DBConnect frame = new DBConnect();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public DBConnect() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 616, 389);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JTabbedPane tabbedPane = new JTabbedPane(JTabbedPane.TOP);
		tabbedPane.setBounds(10, 10, 557, 304);
		contentPane.add(tabbedPane);
		
		JPanel equipmentLogPanel = new JPanel();
		tabbedPane.addTab("Equipment Log", null, equipmentLogPanel, null);
		equipmentLogPanel.setLayout(new GridLayout(0, 1, 0, 0));
		
		JLabel empIDlabel = new JLabel("Employee ID");
		equipmentLogPanel.add(empIDlabel);
		
		empIDtextField = new JTextField();
		equipmentLogPanel.add(empIDtextField);
		empIDtextField.setColumns(10);
		
		JLabel empNameLabel = new JLabel("Employee Name");
		equipmentLogPanel.add(empNameLabel);
		
		empNameTextField = new JTextField();
		equipmentLogPanel.add(empNameTextField);
		empNameTextField.setColumns(10);
		
		JLabel dateLabel = new JLabel("Date (yyyy-mm-dd)");
		equipmentLogPanel.add(dateLabel);
		
		dateTextField = new JTextField();
		equipmentLogPanel.add(dateTextField);
		dateTextField.setColumns(10);
		
		JLabel lblNewLabel = new JLabel("Equipment Code");
		equipmentLogPanel.add(lblNewLabel);
		
		textField_1 = new JTextField();
		equipmentLogPanel.add(textField_1);
		textField_1.setColumns(10);
		
		JLabel equipmentDescriptLabel = new JLabel("Equipment Description");
		equipmentLogPanel.add(equipmentDescriptLabel);
		
		equipmentDescriptTextField = new JTextField();
		equipmentLogPanel.add(equipmentDescriptTextField);
		equipmentDescriptTextField.setColumns(10);
		
		JLabel actionLabel = new JLabel("Action");
		equipmentLogPanel.add(actionLabel);
		
		JRadioButton checkInButton = new JRadioButton("Check In");
		equipmentLogPanel.add(checkInButton);
		
		JRadioButton checkOutLabel = new JRadioButton("Check Out");
		equipmentLogPanel.add(checkOutLabel);
		
		JButton submitButton = new JButton("Submit");
		equipmentLogPanel.add(submitButton);
		
		//!!!!!need submit action handler to send query to database
		
		JPanel viewInventoryLog = new JPanel();
		tabbedPane.addTab("View Inventory", null, viewInventoryLog, null);
		viewInventoryLog.setLayout(new FlowLayout(FlowLayout.CENTER, 5, 5));
		
		JButton btnNewButton = new JButton("View Inventory");
		viewInventoryLog.add(btnNewButton);
		
		JPanel panel = new JPanel();
		tabbedPane.addTab("Update Inventory", null, panel, null);
		panel.setLayout(null);
		
		textField = new JTextField();
		textField.setBounds(25, 51, 186, 29);
		panel.add(textField);
		textField.setColumns(10);
		
		JLabel lblNewLabel_2 = new JLabel("Quantity");
		lblNewLabel_2.setBounds(25, 120, 60, 20);
		panel.add(lblNewLabel_2);
		
		textField_2 = new JTextField();
		textField_2.setBounds(25, 150, 186, 29);
		panel.add(textField_2);
		textField_2.setColumns(10);
		
		JButton btnNewButton_1 = new JButton("Update");
		btnNewButton_1.setBounds(60, 206, 121, 36);
		panel.add(btnNewButton_1);
		
		JLabel lblNewLabel_1 = new JLabel("Equipment Code");
		lblNewLabel_1.setBounds(25, 10, 121, 31);
		panel.add(lblNewLabel_1);
	}
	
}
}
