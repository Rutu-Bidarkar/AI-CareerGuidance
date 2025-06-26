import gradio as gr
import google.generativeai as genai

# Configure Gemini API
GEMINI_API_KEY = "AIzaSyBkMNYm3H0JvwAtLvj2AI7XDIrP8J9GFtQ"  # Replace with your Gemini API key
genai.configure(api_key=GEMINI_API_KEY)

# Initialize the Gemini model
model = genai.GenerativeModel('gemini-pro')

# Sample MCQ questions
QUESTIONS = [
    {"id": 1, "text": "Do you enjoy working with numbers and solving mathematical problems?", "options": ["Yes", "No"]},
    {"id": 2, "text": "Are you interested in creative activities like painting, writing, or music?", "options": ["Yes", "No"]},
    {"id": 3, "text": "Do you like helping others and solving social or community issues?", "options": ["Yes", "No"]},
    {"id": 4, "text": "Are you comfortable working with technology and learning new software?", "options": ["Yes", "No"]},
    {"id": 5, "text": "Do you enjoy analyzing data and finding patterns or trends?", "options": ["Yes", "No"]},
    {"id": 6, "text": "Are you good at communicating and working with people in a team?", "options": ["Yes", "No"]},
    {"id": 7, "text": "Do you prefer working independently rather than in a group?", "options": ["Yes", "No"]},
    {"id": 8, "text": "Are you interested in science, medicine, or healthcare?", "options": ["Yes", "No"]},
    {"id": 9, "text": "Do you enjoy planning and organizing events or projects?", "options": ["Yes", "No"]},
    {"id": 10, "text": "Are you passionate about environmental issues and sustainability?", "options": ["Yes", "No"]},
    {"id": 11, "text": "Do you enjoy taking risks and trying new things?", "options": ["Yes", "No"]},
    {"id": 12, "text": "Are you more of a logical thinker than an emotional one?", "options": ["Yes", "No"]},
    {"id": 13, "text": "Do you value job stability and a predictable routine?", "options": ["Yes", "No"]},
    {"id": 14, "text": "Are you interested in business, finance, or entrepreneurship?", "options": ["Yes", "No"]},
    {"id": 15, "text": "Do you enjoy researching and exploring new ideas or concepts?", "options": ["Yes", "No"]},
]

# Function to analyze responses
def analyze_responses(*responses):
    # Prepare input for Gemini
    input_text = "User responses to the psychometric test:\n"
    for i, response in enumerate(responses):
        input_text += f"Question {i+1}: {response}\n"
    
    # Call Gemini model with a detailed prompt
    prompt = f"""
    Analyze the following user responses to a psychometric test and suggest suitable career paths:
    {input_text}

    Provide a detailed analysis of the user's interests and personality based on their responses.
    Suggest at least 3 career paths that align with their interests.
    For each career path, provide a brief explanation of why it is a good fit.
    **Please provide the output in English.**
    """
    response = model.generate_content(prompt)
    
    # Extract the career suggestion
    career_suggestion = response.text
    
    return career_suggestion

# Create Gradio interface
inputs = []
for question in QUESTIONS:
    inputs.append(gr.Radio(label=question["text"], choices=question["options"]))

interface = gr.Interface(
    fn=analyze_responses,
    inputs=inputs,
    outputs="text",
    title="Psychometric Test",
    description="Take this test to discover career paths that match your interests and personality."
)

# Launch the interface
interface.launch()